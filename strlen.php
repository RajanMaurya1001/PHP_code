<?php
$str= "hi this is Rajan kushwaha";
echo strlen($str);
?>
<!------------trim()------>
<?php
$str1= "  Hello";
echo strlen(trim($str1));
?>

<!------------str_repeat()------>
<?php
$str1= "  Hello";
echo str_repeat('hey',10);
?>

<!------------str_replace(replace string, reoplaced by string, string)------>
 <?php
$str1= "  Hello world";
//  $replace=str_replace("world", "ram", $str1);8
//  echo($replace);
 
?> 

<!------------explode------>
<?php
$str1= "  Hello this is rajan kushwaha";
  print_r (explode(" ",$str1));
  
 
?>
<!------------implode------>
<?php
$str1= ["Hello", "this", "is", "rajan", "kushwaha"];
  echo (implode(" ",$str1));
 
?>

<!------------str_split------>
<?php
$str1= "  Hello this is rajan kushwaha";
print_r (str_split($str1));     
?>
<!-- ----------str_word_count---->
<?php
echo str_word_count("hello rajan Kushwaha");
echo ("<br>"); 

?> 

<!-- ----------str_lcfirst()---->
<?php
   $str="Hello World";
  echo lcfirst($str);
  echo ("<br>");
   
?> 

<!-- ----------str_ucfirst()---->
<?php
   $str="hello world";
  echo ucfirst($str);
  echo ("<br>");
  echo ("<br>");
   
?> 

<!-- ----------str_ucword()---->
<?php
   $str="hello world! we are creators.. welcome to our world.";
  echo ucwords($str);
  echo ("<br>");
  echo ("<br>");
   
?> 
<!-- ----------strtoupper()---->
<?php
   $str="hello world! we are creators.. ";
  echo strtoupper($str);
  echo ("<br>");
   
?> 
<!-- ----------strtolower()---->
<?php
   $str="hello world! we are creators.. ";
  echo strtolower($str);
  echo ("<br>");
   
?> 
<!-- ----------str_chop()---->
<?php
  $str="hello world";
  echo chop($str,"world");
  echo ("<br>");
?> 
<!-- ----------substr()---->
<?php
   $str="hello world";
  echo substr($str, 1, 7);
  echo ("<br>");
   
?> 
<!-- ----------strpos()---->
<?php
  $str="hello world! we are creators.. ";
  echo strpos($str,"o");
  echo ("<br>");
   
?> 
<!-- ----------strcmp()---->
<?php
   $str1="hello world";
   $str2="hello world";
  echo strcmp($str1,$str2);
  echo ("<br>");
   
?> 
 

