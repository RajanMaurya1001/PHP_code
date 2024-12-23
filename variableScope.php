<?php
function local()
{
    $a=10;
    $b=20;
    echo $a,$b;
}
local();
// echo $a;                              
?>

<!-- -------------Global Variable---------- -->
<?php
$a=10;
function globalVar()
{
    global $a;
    echo $a;
}
globalVar();
echo "This is global Variable:",$a;
?>

<!-- -------------Static Variable---------- -->
<?php
// $a=10
function staticVar()
{
    static $a=10;
    $a++;
    echo $a;
}
staticVar();
staticVar();
staticVar();
echo $a;

?>