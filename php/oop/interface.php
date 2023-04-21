<?php
interface vegetable
{
    public function type();
}
class Cabbage implements vegetable
{
    public function type()
    {
        echo "hey!! i am GREEN vegetable<BR>";
    }
}

class potato implements vegetable
{

    public function type()
    {
        echo "hey!! i am ROOT vegetable";
    }
}

$cabbage = new cabbage;
$cabbage->type();
$potato = new potato;
$potato->type();
