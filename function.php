<?php
function hello()
{
    echo "Hello World"."<br>";
}

hello();
?>
<!-- ==================loop (1 to 10)=============== -->
<?php
function helloo()
{
    for($i=0; $i<=10; $i++)
    echo $i."<br>";
}

helloo();
?>
<!-- =============use of return======================== -->
<?php
function add()
{
    for($i=0; $i<=10; $i++)
    $a= $i."<br>";
    return $a;
}
echo add();
?>

<!-- =============use of return======================== -->
<?php
function addd()
{
    for($i=0; $i<=10; $i++)
    $a[]= $i."<br>";
    return $a;
}
print_r(addd());
?>