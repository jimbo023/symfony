<?php

abstract class Product
{
    protected $price;
    protected $title;

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    abstract protected function getValue();
}

class Item extends Product
{
    private $item; // fisicItem, digitalItem

    public function getItem()
    {
        return $this->item;
    }

    public function setItem(string $item)
    {
        $this->item = $item;
    }

    public function getValue()
    {
        return "{$this->item}: {$this->title} - {$this->price} rub" . PHP_EOL;
    }
}

$a1 = new Item();
$a1->setItem('fisicItem');
$a1->setTitle('iPhone');
$a1->setPrice(5000);
echo $a1->getValue();

$a2 = new Item();
$a2->setItem('DigitalItem');
$a2->setTitle('Sims 4');
$a2->setPrice(2999);
echo $a2->getValue();

// Задание 2

trait db
{
    public function connectDB()
    {
        mysqli_connect('127.0.0.1', 'root', '', 'gb');
        echo "connection to DB successed".PHP_EOL;
    }
}

class Signeton
{
    use db;

    public function __construct()
    {
        $this->connectDB();
    }
    static protected $instance;

    public static function getInstance() :self {
        if(self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$b=Signeton::getInstance();
$b=Signeton::getInstance();
$b=Signeton::getInstance();
$b=Signeton::getInstance();