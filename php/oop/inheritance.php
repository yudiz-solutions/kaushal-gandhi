<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
        public function carDetails()
        {
            echo "The car name is {$this->name}:-<br>  color: {$this->color} price: {$this->price} type: {$this->type}";
        }
    }

    class suzuki extends car
    {
        public function message()
        {
            echo "hello i am new class<br><br> ";
        }
    }

    $suzuki = new suzuki("swift", "blue", "8L", "MANUAL",);
    $suzuki->message();
    $suzuki->carDetails();
    ?>
</body>

</html>