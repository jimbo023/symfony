<?php

class Items
{
    public function foo()
    {
        static $x = 0;
        echo ++$x . PHP_EOL;
    }
}

class Item extends Items {

}

