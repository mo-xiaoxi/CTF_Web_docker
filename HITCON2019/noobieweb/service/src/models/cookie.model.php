<?php
class Cookie extends Model
{
    public static $SECRET_KEY;
    public static $algo;
    public static $inited = false;

    public static function init()
    {
        if (self::$inited) {
            return;
        }

        global $SECRET_KEY;
        self::$SECRET_KEY = $SECRET_KEY;
        self::$algo = $_COOKIE["algo"] ?? "sha1";
        self::$inited = true;
    }

    public static function load_cookie()
    {
        self::init();

        if (isset($_COOKIE["auth"])) {
            $ary = explode(".", $_COOKIE["auth"]);
            if (count($ary) < 3) {
                return false;
            }

            [$data, $algo, $hmac] = $ary;

            return self::load_object($data, $algo, $hmac);
        }
    }

    public static function load_object($data, $algo, $hmac)
    {
        if (!is_null($data) && !is_null($algo) && !is_null($hmac) && \
            hash_hmac($algo, $data, self::$SECRET_KEY) == $hmac) {
            return unserialize(base64_decode($data));
        }
    }

    public static function sign_object($obj)
    {
        self::init();

        $data = base64_encode(serialize($obj));
        $algo = self::$algo;
        $hmac = hash_hmac($algo, $data, self::$SECRET_KEY);
        return [
            "auth" => "$data.$algo.$hmac",
            "algo" => self::$algo
        ];
    }

    public static function dump_cookie($obj)
    {
        self::init();

        $data = self::sign_object($obj);

        foreach ($data as $k => $v) {
            setcookie($k, $v);
        }
    }
}
