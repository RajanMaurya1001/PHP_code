<?php
echo date("Y")."<br>";
echo date("y")."<br>";
echo date("M")."<br>";
echo date("m")."<br>";
echo date("d")."<br>";
echo date("D")."<br>";
echo date("h")."<br>";
echo date("i")."<br>";
echo date("s")."<br>";
echo date("A")."<br>";
echo date_default_timezone_get()."<br>";
date_default_timezone_set("Asia/kolkata");
echo date("H")."<br>";
echo date("Y-m-d h-i-s A")."<br>";
$a = mktime(12,23,32,12,18,24);
echo date("h:i:s d-m-y",$a)."<br>";

$time= strtotime("10:24am  18 december 2024");
echo date("h:i:s d-m-y",$time);
// include('include.php');
include_once('include.php');
// required("include.php");


?>