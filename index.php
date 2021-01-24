<?php
require __DIR__."/vendor/autoload.php";

$test = new \App\Model\ProductManager();
$productstest = $test->getAllProduct();
echo "<pre>";

