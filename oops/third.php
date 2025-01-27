<?php
class Fruits
{
    function mango()
    {
        echo "Aha mango ";
    }
    function banana()
    {
        echo "this is kela ";
    }
    function apple()
    {
        echo "this is apple ";
    }
}

$fruit = new Fruits;
$fruit->mango();
$fruit->banana();
$fruit->apple();
