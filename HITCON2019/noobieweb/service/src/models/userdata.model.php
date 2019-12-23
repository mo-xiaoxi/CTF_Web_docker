<?php
class UserData extends Model
{
    public function __construct($username = null)
    {
        $this->init($username);
    }

    public function init($username = null)
    {
        if (!$username) {
            $this->username = "Guest";
            $this->perm = PERM_GUEST;
            return true;
        } else {
            $row = self::fetch_user($username);
            if (!$row) {
                return false;
            }

            $this->extract($row);
            return true;
        }
    }

    public function login()
    {
        extract($_POST);

        if (!isset($username) || !isset($password)) {
            return false;
        }

        $row = self::fetch_user($username);
        if (!$row) {
            return false;
        }

        if (hash($row["hash_algo"], $row["nonce"] . $password) != $row["password"]) {
            return false;
        }

        $this->init($username);

        return true;
    }

    public function register()
    {
        extract($_POST);

        if (!isset($username) || !isset($password) || !isset($hash_algo)) {
            return false;
        }

        $trans = new Transation(null, $username, "Newcomer Gift :)");

        $nonce = (string) rand();
        $password = hash($hash_algo, $nonce . $password);
        $username = self::$DB->quote($username);
        $password = self::$DB->quote($password);
        $hash_algo = self::$DB->quote($hash_algo);

        $res = self::$DB->exec(
            "INSERT INTO user (username, password, hash_algo, nonce)
            VALUES ($username, $password, $hash_algo, $nonce);"
        );

        if (!$res) {
            return false;
        }

        $res = $trans->save();

        return $res;
    }

    public function edit()
    {
        extract($_POST);

        if (isset($password) && isset($hash_algo) && $password && $hash_algo) {
            $_POST["password"] = hash($hash_algo, $this->nonce . $password);
        } else {
            unset($_POST["password"]);
            unset($_POST["hash_algo"]);
        }

        $avatar = isset($_FILES["avatar"]) ?
          self::upload_avatar($_FILES["avatar"]) : false;

        $set = $_POST;
        if ($avatar) {
            $set["avatar"] = $avatar;
        }

        $res = self::update_user($set, ["username" => $this->username]);

        if ($res) {
            $res = $this->init($this->username);
        }

        return $res;
    }

    public function send_cash()
    {
        extract($_POST);

        if (!isset($to_user) || !isset($cash)) {
            return false;
        }

        $reason = $reason ?? "";

        if ($this->cash < $cash) {
            return false;
        }

        $trans = new Transation($this->username, $to_user, $reason, $cash);
        $res = $trans->save();

        if ($res) {
            $this->cash -= $cash;
        }

        return true;
    }

    public function cash_out()
    {
        extract($_POST);

        if (!isset($amount) || !isset($account)) {
            return false;
        }

        $amount = (float) $amount;
        $CASHOUT_LOWERBOUND = 1000.0;

        if ($amount < $CASHOUT_LOWERBOUND) {
            return false;
        }

        if ($this->cash < $amount) {
            return false;
        }

        $trans = new Transation($this->username, null, "Cash out", $amount);
        $res = $trans->save();
        if (!$res) {
            return false;
        }

        $this->cash -= $amount;

        $cmd = sprintf("/cash_out %s %d", escapeshellarg($account), $amount);
        $path = shell_exec($cmd);

        // Remove prefix of output path
        $path = trim($path);
        $path = str_replace("/var/www/html", "", $path);

        return $path;
    }

    public static function upload_avatar($file_obj)
    {
        $target_dir = "data/avatar/";
        system("mkdir -p $target_dir");

        $deny_ext = ['php', 'php3', 'php4', 'php5', 'phtml', 'pht'];

        $file_name = $file_obj["name"];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if (in_array($file_ext, $deny_ext)) {
            return;
        }

        if ($file_obj['size'] > 4000000) {
            return;
        }

        $path = $target_dir . $file_name;

        $res = move_uploaded_file($file_obj["tmp_name"], $path);
        if ($res) {
            return $path;
        }
    }

    public static function fetch_user($username)
    {
        $username = self::$DB->quote($username);
        $stmt = self::$DB->query("SELECT * FROM user WHERE username = $username");
        if (!$stmt) {
            return false;
        }

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    public static function update_user($set, $condi)
    {
        $escape = function ($k, $v) {
            $v = self::$DB->quote($v);
            return "$k = $v";
        };

        $set = array_fmap($escape, $set);
        $set = implode(", ", $set);

        $condi = array_fmap($escape, $condi);
        $condi = implode(" AND ", $condi);

        $res = self::$DB->exec(
            "UPDATE user
            SET $set
            WHERE $condi"
        );
        return $res;
    }
}
