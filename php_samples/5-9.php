<?php
interface ItemInterface
{
    public function getPrice(): int;
}

class Book implements ItemInterface
{
    private int $price;

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}

class Pencil implements ItemInterface
{
    private int $price;

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}
