<?php
class car
{
    public $name;
    public $color;
    public $price;
    public $type;

    function __construct($name, $color, $price, $type)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->type = $type;
    }
    function __destruct()
    {
        echo "The car name is {$this->name}:-<br>  color: {$this->color} price: {$this->price} type: {$this->type}";
    }
}

$car = new car("VOLVO", "BALCK", "48L", "AUTO<br><br>");
$car = new car("ALTO", "RED", "4L", "MANUAL<br><br>");
$car = new car("BMW", "WHITE", "80L", "AUTO");
