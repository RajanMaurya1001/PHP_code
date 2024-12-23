<!-- =============if============== -->
<?php
$var =100;

if($var == "100" && $var === 100)
{
    echo "equal <br>";
}

echo"all the best<br>";

?>
<!-- =============if-else============== -->
<?php
$var =100;

if($var == "100" && $var === 10)
{
    echo "equal <br>";
}
else{
    echo "galat hai<br>";
}

echo"all the best<br>";

?>

<!-- ==========else-if================= -->
<?php
$var =100;

if($var != "100" && $var === 100)
{
    echo "equal <br>";
}
else if(!$var){
    echo "Again equal hai<br>";
}
else if($var>10||$var<10){
    echo "hello<br>";
}
else{
    echo"bas<br>";
}

// echo"all the best";

?>

<!-- ==========else-if================= -->


<?php
$a =10;

if($a++==10 && ++$a != 12)
{
    echo "sahi hai<br>";
}
else if($a-- + ++$a > 20)
{
    echo "sab sahi hai<br>";
} 

?>

<?php
$a =10;

if($a++==10 && ++$a != 12)
{
    echo "sahi hai<br>";
}
else 
{
    echo "sab galat hai<br>";
} 

?>