<?php

class Products
{
    protected $id;
    protected $title;
    protected $price;

    public function __construct($id = null, $title = null, $price = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}

class TypeProducts extends Products
{
    private $typeProduct; // телефон, планшет или что-то ещё
    private $model;

    public function getType()
    {
        return $this->typeProduct;
    }

    public function setType($typeProduct)
    {
        $this->typeProduct = $typeProduct;
        return $this;
    }
    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function callToProduct()
    {
        return "{$this->typeProduct}, {$this->title} (model: {$this->model}) price = {$this->price} rub" . PHP_EOL;
    }
}

$a = new TypeProducts();
$a->setTitle('Samsung');
$a->setPrice('30000');
$a->setType('Phone');
$a->setModel('XR500');

echo $a->callToProduct();
