<?php
class Transation extends Model
{
    public function __construct($sender, $receiver, $reason, $amount = 500.0)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->reason = $reason;
        $this->amount = $amount;
    }

    public function save()
    {
        extract(get_object_vars($this));

        $sender = $sender ?? "System";
        $receiver = $receiver ?? "System";

        if ($this->sender) {
            self::add_cash($sender, -$amount);
        }
        if ($this->receiver) {
            self::add_cash($receiver, +$amount);
        }

        $sender  = self::$DB->quote($sender);
        $receiver  = self::$DB->quote($receiver);
        $reason  = self::$DB->quote($reason);
        $res = self::$DB->exec(
            "INSERT INTO transation (sender, receiver, reason, amount)
            VALUES ($sender, $receiver, $reason, $amount)"
        );
        return $res;
    }

    public static function add_cash($username, $amount)
    {
        $row = UserData::fetch_user($username);
        if (!$row) {
            return false;
        }

        $new_cash = (float)$row["cash"] + $amount;

        return UserData::update_user(["cash" => $new_cash], ["id" => $row["id"]]);
    }
}
