<?php
// traits use for multipple inheritance

trait petrolcars
{
    public function type1()
    {
        echo "my type is petrol";
    }
}

trait electrioniccars
{
    public function type2()
    {
        echo "i am electronic car";
    }
}

class cartype
{
    use petrolcars;
}

class hybrid
{
    use petrolcars, electrioniccars;
}

$cartype = new cartype;
$cartype->type1();
echo "<br>";
$hybrid = new hybrid;
$hybrid->type2();
