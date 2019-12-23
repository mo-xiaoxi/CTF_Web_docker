<?php
class Base
{
    public function extract($array)
    {
        foreach ($array as $key => $value) {
            $this->$key = $value;
        }
    }

    // Get the secret key that will change automatically
    // by the time.
    public static function get_var_key()
    {
        return file_get_contents("/var/www/flag");
    }
}
