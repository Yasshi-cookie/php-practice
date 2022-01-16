<?php
class Item
{
    private string $name;
    private int $prife;

    /**
     * Undocumented function
     *
     * @param [type] $name
     */
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function __toString()
    {
        return $this->name . ' / ' . number_format($this->price) . '円';
    }
}

$item = new Item('PHP入門', 1500);
echo $item;

echo "\n";
