<!-- =============if============== -->
<?php
$var =100;

if($var == "100" && $var === 100)
{
    echo "equal";
}

echo"all the best";

?>
<!-- =============if-else============== -->
<?php
$var =100;

if($var == "100" && $var === 10)
{
    echo "equal ";
}
else{
    echo "galat hai";
}

echo"all the best";

?>

<!-- ==========else-if================= -->
<?php
$var =100;

if($var != "100" && $var === 100)
{
    echo "equal ";
}
else if(!$var){
    echo "Again equal hai";
}
else if($var>10||$var<10){
    echo "hello";
}
else{
    echo"bas";
}

// echo"all the best";

?>

<!-- ==========else-if================= -->


<?php
$a =10;

if($a++==10 && ++$a != 12)
{
    echo "sahi hai";
}
else if($a-- + ++$a > 20)
{
    echo "sab sahi hai";
} 

?>
