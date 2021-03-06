<?php


namespace App\Model;


class ProductManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllProduct()
    {
        $sql = 'SELECT * FROM products';
        $go = $this->dbConnect->connectDB()->query($sql);
        $data = $go->fetchAll();
       /* var_dump($data);
        die();*/
        $products = [];
        foreach ($data as $item) {
            $product = new Product($item["id"], $item["productname"], $item["category"], $item["price"], $item["amount"], $item["datecreate"], $item["datecreate"]);
            array_push($products, $product);

        }
        return $products;
    }
}

/*public function getAllProduct()
    {
        $sql = "SELECT * FROM Products";
        $data = $this->dbConnect->query($sql);
        $products = [];
        foreach ($data as $item){
            $products[] = new Products($item['id'],$item['name'],$item['categoryId'],$item['price'],$item['description']);
        }
        return $products;
    }*/