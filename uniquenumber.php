<?php
$arr = [1,1,2,2,3,3,4,4,5,5];
// $uniqe =array_unique($arr);
// print_r($uniqe);

$output = [];
foreach($arr as $val){
    if(!in_array($val, $output)){
        $output[] =$val;
    }
    
}
print_r($output);
?>