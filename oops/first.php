<?php
class ClassName
{
    public $name = "Rajan"; //property
    function demo()
    {
        $name1 = "Hello";
        echo $name1;
    }
}

$obj = new ClassName; //Object
echo $obj->name;
echo $obj->demo();
