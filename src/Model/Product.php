<?php


namespace App\Model;


class Product
{
protected $id;
protected $productname;
protected $category;
protected $price;
protected $amount;
protected $datecreate;
protected $productdescrible;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * @param mixed $productname
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getDatecreate()
    {
        return $this->datecreate;
    }

    /**
     * @param mixed $datecreate
     */
    public function setDatecreate($datecreate)
    {
        $this->datecreate = $datecreate;
    }

    /**
     * @return mixed
     */
    public function getProductdescrible()
    {
        return $this->productdescrible;
    }

    /**
     * @param mixed $productdescrible
     */
    public function setProductdescrible($productdescrible)
    {
        $this->productdescrible = $productdescrible;
    }

    /**
     * Product constructor.
     * @param $id
     * @param $productname
     * @param $category
     * @param $price
     * @param $amount
     * @param $datecreate
     * @param $productdescrible
     */
    public function __construct($id, $productname, $category, $price, $amount, $datecreate, $productdescrible)
    {
        $this->id = $id;
        $this->productname = $productname;
        $this->category = $category;
        $this->price = $price;
        $this->amount = $amount;
        $this->datecreate = $datecreate;
        $this->productdescrible = $productdescrible;
    }

}