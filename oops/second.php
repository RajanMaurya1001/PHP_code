<?php
class Car
{
    function engine()
    {
        echo 'Engine Start';
    }
    function gear()
    {
        echo '5 gear';
    }
}

$nano = new car();
$nano->engine();
$nano->gear();
