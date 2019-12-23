<?php
class Item extends Model
{
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public static function fetch_item($name)
    {
        $name = self::$DB->quote($name);
        $stmt = self::$DB->query("SELECT * FROM items WHERE name = $name");
        if (!$stmt) {
            return false;
        }

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row ? new self($row["name"], $row["price"]) : false;
    }
}
