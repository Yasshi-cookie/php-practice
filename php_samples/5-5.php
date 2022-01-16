<?php
class Item
{
    // 商品の名前
    public string $name;
    // 商品の価格
    private int $price;

    // コンストラクター
    public function __construct(string $name, int $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * 価格を設定する
     *
     * @param integer $price
     */
    public function setPrice(int $price)
    {
        if ($price < 0) {
            return false;
        }

        $this->price = $price;
    }


    public function getPrice(string $end = '')
    {
        return number_format($this->price) . $end;
    }
}

// PHP入門
$php_basic = new Item('PHP入門');
$php_basic->setPrice(1500);

echo $php_basic->name . '/' . $php_basic->getPrice('円');

echo "\n";

// JS入門
$js_basic = new Item('JS入門', 2300);

echo $js_basic->name . '/' . $js_basic->getPrice('円');

echo "\n";
