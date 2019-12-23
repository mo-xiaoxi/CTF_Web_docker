<?php
class StockMarket extends Model
{
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function buy()
    {
        extract($_POST);

        $hash = $hash ?? "sha1";
        $varkey = self::get_var_key();

        $item = Item::fetch_item($name);

        if (!$item) {
            return false;
        }

        $item->amount = $amount;
        $item->note = $note ?? "";

        $cost = $amount * $item->price;

        if ($cost >= $this->user->cash) {
            return false;
        }

        $this->user->cash -= $cost;
        $trans = new Transation($this->user->username, null, "Buy $name", $cost);
        if (!$trans->save()) {
            return false;
        }

        $cert = new Cert($hash, $varkey, serialize($item));
        $cert_data = serialize($cert);

        $cert_path = "data/certs/" . md5($this->user->username) . "/";
        system("mkdir -p $cert_path");

        $filename = $filename ?? md5($cert_data) . ".cert";

        $p = $cert_path . $filename;
        file_put_contents($p, $cert_data);
        return $p;
    }

    public function verify()
    {
        extract($_POST);

        if (!isset($_FILES["cert"])) {
            return false;
        }

        $p = $_FILES["cert"]["tmp_name"];
        $cert = unserialize(file_get_contents($p));

        if (!$cert->verified) {
            return false;
        }

        $item = unserialize($cert->data);
        return "We confirm that you bought {$item->amount} of '{$item->name}' at price {$item->price}.";
    }
}
