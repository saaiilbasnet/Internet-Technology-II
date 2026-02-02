<?php
require_once '../Models/productModel.php';
class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }
    public function listProducts()
    {
        $products = $this->model->getAllProducts();
        require '../Views/productView.php';
    }
}

$controller = new ProductController();
$controller->listProducts();
?>