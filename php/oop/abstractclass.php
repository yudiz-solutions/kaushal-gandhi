<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>absract class</title>
</head>

<body>
    <?php

    /// parent calss
    abstract class car
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
        abstract public function carDetails();
    }

    //child class

    class suzuki extends car
    {
        public function carDetails()
        {
            echo "hello i am new class suzuki<br><br> ";
        }
    }

    class toyota extends car
    {
        public function carDetails()
        {
            echo "hello i am new class toyota<br><br> ";
        }
    }
    $suzuki = new suzuki("swift", "blue", "8L", "MANUAL",);
    $suzuki->carDetails();
    $toyota = new toyota("fortuner", "gray", "35L", "MANUAL",);
    $toyota->carDetails();
    ?>
</body>

</html>