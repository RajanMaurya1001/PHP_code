<?php
$arr = [1,2,3,4];
 array_push($arr,[1,4,3]);
 echo "<pre>";
 print_r($arr);


?>
<!-----------array_pop()------- -->
<?php
$arr1 = [1,2,3,4];
 array_pop($arr1);
 echo "<pre>";
 print_r($arr1);

?>
<!-----------array_unshift()------- -->
<?php
$arr1 = [1,2,3,4];
 array_unshift($arr1,"rajan");
 echo "<pre>";
 print_r($arr1);

?>
<!-----------array_shift()------- -->
<?php
$arr1 = [1,2,3,4];
 array_shift($arr1);
 echo "<pre>";
 print_r($arr1);

?>
<!-----------array_merge(arr1,arr2)------- -->
<?php
$arr1 = [1,2,3,4];
$arr2 = [1,2,3,'Rajan'];
 $newArr =array_merge($arr1,$arr2);
 echo "<pre>";
 print_r($newArr);

?>
<!-----------array_merge(arr1,arr2)------- -->
<?php
$arr1 = 1;
$arr2 = 2;
$arr3 = 3;
$arr4 = "Rajan";
 $newArr =compact('arr1','arr2','arr3','arr4');
 echo "<pre>";
 print_r($newArr);

?>

<!-----------sort(arr1)------- -->
<?php
$arr2 = [5,2,3,7,'Rajan'];
 sort($arr2);
 print_r($arr2);

?>
<!-----------rsort(arr1)------- -->
<?php
$arr2 = [5,2,3,7,'Rajan'];
 rsort($arr2);
 print_r($arr2);

?>
<!-----------range(starting,ending)------- -->
<?php
print_r( range(0,10));
//  print_r($arr2);

?>

<!-----------array_combine($key,$value)------- -->
<?php
$key= range('a','f');
$value= range(0,5);
$arr = array_combine($key,$value);
print_r($arr);
?>

<!-----------array_search()------- -->
<?php
$value= ['Dog','Cat','Lion'];
print_r(array_search('Lion',$value));
?>

