<?php
 $a=100;
 $b="10";
 $c=$a+$b;
 echo ($c."<br>");
 echo gettype($c);
?>

<!-- Explicit -->
<?php
 $x="100";
 $y= (int)$x;
 print(gettype($x)."<br>");
 print($y."<br>");
?>