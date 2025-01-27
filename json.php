<?php
$arr = ['name' => 'Rajan', 'email' => 'rajan@gmail.com', 'phone' => 8303293043];
$json = json_encode($arr, JSON_PRETTY_PRINT);
echo "<pre>";
echo $json;
