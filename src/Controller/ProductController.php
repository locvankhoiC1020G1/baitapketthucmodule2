<?php

namespace App\Controller;


use App\Model\ProductManager;

class ProductController
{
    protected ProductManager $productManager;

    public function __constructor()
    {
        $this->productManager = new ProductManager();

    }

    public function viewAllProduct()
    {

        $products =  $this->productManager->getAllProduct();
        include_once 'src/View/list.php';
    }

}