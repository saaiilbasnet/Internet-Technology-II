<?php
class ProductModel
{
    private $products;
    public function __construct()
    {
        $this->products = [
            [
                'id' => 1,
                'name' => 'Apple',
                'price' => 0.5
            ],
            [
                'id' => 2,
                'name' => 'Banana',
                'price' => 0.3
            ],
            [
                'id' => 3,
                'name' => 'Orange',
                'price' => 0.7
            ],
        ];
    }
    public function getAllProducts()
    {
        return $this->products;
    }
}
?>