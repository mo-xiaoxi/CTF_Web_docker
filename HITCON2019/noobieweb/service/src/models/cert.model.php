<?php
class Cert extends Model
{
    public function __construct($hash, $varkey, $data)
    {
        global $SECRET_KEY;

        $this->hash = $hash;
        $this->keydata = self::enc($SECRET_KEY, $varkey);
        $this->data = $data;

        $this->sign = $hash($varkey . $this->data);
        $this->verified = true;
    }

    public function __sleep()
    {
        return ["hash", "keydata", "data", "sign"];
    }

    public function __wakeup()
    {
        global $SECRET_KEY;

        $hash = $this->hash;
        $varkey = self::dec($SECRET_KEY, $this->keydata);
        $this->verified = $this->sign == $hash($varkey . $this->data);
    }

    public static function enc($key, $string)
    {
        return self::xor($key, $string);
    }
    public static function dec($key, $string)
    {
        return self::xor($key, $string);
    }
    public static function xor($key, $string)
    {
        $out = "";
        $n1 = strlen($key);
        $n2 = strlen($string);
        $n = max($n1, $n2);

        for ($i = 0; $i < $n; $i++) {
            $out .= chr(ord($key[$i % $n1]) ^ ord($string[$i % $n2]));
        }
        return $out;
    }
}
