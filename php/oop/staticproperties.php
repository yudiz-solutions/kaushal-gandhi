<?php
class kaushal
{
    public static $age = 20;
}

class brother extends kaushal
{
    public function brotherage()
    {
        return parent::$age;
    }
}

echo brother::$age;
