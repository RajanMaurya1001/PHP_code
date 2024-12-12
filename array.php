<?php

$name = ["rajan","vishal","adarsh"];
$age = ["rajan"=>20,"vishal"=>60, "adarsh"=>50];
// print_r($name);
// print_r($age);

foreach($name as $val)
{
    echo $val."<br>";
}
foreach($age as $a)
{
    echo $a."<br>";
}

?>

<!-- ==================multidimansonal array================= -->
<?php
$arr=[
    [1,2,3]
];
print_r($arr);

// -----------adding assosiative array------------------------------
$arr = ["name"=>["age"=>1,2,3,"x"=>4]
];
print_r($arr["name"]["age"]);
?>

<!-----------for array length------->
<?php
$arr = [1,2,3,4,5,6,7];
echo "<br>";
echo count($arr);
?>