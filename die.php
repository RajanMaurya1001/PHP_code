<?php
echo "hello <br>";
echo "world";
// die();
// echo "hii";
?>

<?php
function dead($para='')
{
    echo $para;
    exit;
}
dead();
echo "hello";

?>