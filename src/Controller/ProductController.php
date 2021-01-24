<?php

namespace App\Controller;
use App\Model\Product;
use App\Model\ProductManager;
class ProductController
{
protected $productManager;

    public function __constructor()
    {
        $this->productManager = new ProductManager();
        
}

    public function viewAllProduct()
    {
$products= $this->productManager->
 }
}