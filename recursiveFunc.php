<!-- <?php
// function number($num){
//  if($num<=10)
//  {
//     echo $num."<br>";
//     return number($num+1);
//  }

// }
//  number(1);
?> -->

<!-- ==================================================== -->
<!-- <?php
// function number($num){
//  if($num>5)
//  {
//     return $num;
    
    
//  }
//  return number($num+1);
 

// }
//  echo number(1);
?> -->
<!-- ==============factorial program========================== -->
<?php
function fact($num){
 
 if($num == 1)
 {
    return $num;  
 }
 return fact($num-1)*$num;
}
echo fact(6);
?>