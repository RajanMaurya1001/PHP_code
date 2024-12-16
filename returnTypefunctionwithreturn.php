<!----------required paramrter---------------->
<?php

function calculater($a,$b,$operator)
{
    switch($operator)
    {
        case '+':
         return $a+$b;
         case '-':
         return $a-$b;
         case '*':
         return $a*$b;
         case '/':
         return $a/$b;

    }

}
echo calculater(10,2,"+");
?>

<!----------default paramrter---------------->
<?php

function defaultPara($age=18)
{
   if($age >= 18)
   {
    return "eligibal for vote";
   }
   else{
    return "not eligibal for vote";
   }

}              
echo defaultPara(17)."<br>";

?>

<!----------variable length paramrter---------------->
<?php

function variableLength(...$list)
{
   echo "Hello"."<br>";
   print_r($list);

}              
variableLength(1,2,3,4,4,5,6,78,9);
?>

<!----------strict paramrter---------------->
<?php

function strictPara(int $a, int $b)
{
   echo $a + $b;
}  
strictPara(10,"10");   
echo "<br>";         

?>

<!--------------------Anonymous Function----------------------------->
<?php

$anonymous = function ($a,$b)
{
   echo $a + $b;
}; 
$anonymous(10,"20");            

?>

<!--------------------Anonymous Function----------------------------->
<?php

$fact = function($n)
{
    $factt=1;
   for($a=1; $a<=$n; $a++)
   {
    $factt = $factt*$a; 
   }
   return $factt;
}; 
echo $fact(7);            
?>

                         