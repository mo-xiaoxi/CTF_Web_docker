<?php
class Model extends Base
{
    public static $DB;
}
Model::$DB = new PDO('sqlite:/var/www/db.sqlite');
