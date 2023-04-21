<?php
// class kaushal
// {
//     public static function welcome()
//     {
//         echo "neel is not available i am kaushal how can in help you?";
//     }
// }

// class neel
// {
//     public function message()
//     {
//         kaushal::welcome();
//     }
// }

// $neel = new neel();
// echo $neel->message();



class petrolcar
{
    protected static function cartypes()
    {
        return "i am petrol car";
    }
}
class  swift extends petrolcar
{

    public $cartype;
    public function __construct()

    {
        $this->cartype = parent::cartypes();
    }
}

$swift = new swift;
echo $swift->cartype;
