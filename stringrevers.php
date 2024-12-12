<!-- <?php
// $str = "rajan";

// for($i=strlen($str)-1; $i>=0; $i--)
// {
//    echo $str[$i];
// }

?> -->

<?php
$str ="hello world";
// echo strrev("hello world");

$words = explode(" ",$str);
$firstWord=strrev($words[1]);
// $secondtWord=($words[1]);
echo $words[0]." ".$firstWord;
?>

