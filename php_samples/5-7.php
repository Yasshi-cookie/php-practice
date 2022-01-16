<?php
class Item
{
    // 個数
    protected int $unit;

    /**
     * Undocumented function
     *
     * @param integer $unit
     */
    public function __construct(int $unit)
    {
        $this->unit = $unit;
    }


    public function getUnit(): string
    {
        return $this->unit . '個';
    }
}

class Book extends Item
{
    /**
     * Undocumented function
     *
     * @param type $param
     * @return stirng
     */
    public function getUnit(): string
    {
        return $this->unit . '冊';
    }
}


$eraser = new Item(10);
echo $eraser->getUnit();

echo "\n";

$book = new Book(5);
echo $book->getUnit();

echo "\n";
