<?php
class Item
{
    private static int $tax = 10;

    /**
     * Undocumented function
     *
     * @return integer
     */
    public static function getTax(): int
    {
        return self::$tax;
    }
}

echo Item::getTax();

echo "\n";
