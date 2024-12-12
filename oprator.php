<?php
$a = 20;
$b = 20;
echo ($a+$b."<br>");//Arithmetic Oprator
echo ($a/$b."<br>");//Arithmetic Oprator

$a+=10;
echo $a."<br>";//$a=$a+10; //Asignement Operator

$b *= 2;
echo $b."<br>";
// $d *= 2;
// echo $d;

$name = "rajan";
$last = "kushwaha";
echo $name. " ".$last ."<br>";//String Oprator

$c=$a==20;//comparision operator
echo ($c);
var_dump($c);

$c=$a>=20;//comparision operator
// echo ($c);
var_dump($c);
// echo "<br>"

$arr = [1,"hello",true,1.2,null];
var_dump($arr);


// $e = $a||$b;/logical oprator
// $e = $a && $b;
// $e = !$a;
$e = $a!=30;
echo $e. "<br>";

echo ++$a. "<br>";//unary oprator

$r = 10;
$u = 10;

$f = $r!=$u?"Hii":"Bay";
echo $f;



?>