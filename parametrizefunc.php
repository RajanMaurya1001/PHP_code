<!-- ==============parametrize function====================== -->
<?php
function add($a,$b)
{
    echo $a+$b;
}
add('3',7);
?>

<!-- ==============parametrize calculator function====================== -->

<?php

function calculater($a,$b,$c)
{
    if($c== "+")
    {
        echo $a+$b."<br>";
    }
    elseif($c== "-")
    {
        echo $a-$b."<br>";
    }
    elseif($c== "*")
    {
        echo $a*$b."<br>";
    }
    else
    {
       echo $a/$b;
    }

}
calculater(10,2,"/");
?>
<!-- ==============parametrize calculator function====================== -->
<?php

function table($a)
{
    for($i=1; $i<=10; $i++)
    {
        echo $a*$i."<br>";
    }
    
}
table(2);
?>

<!-- ==============parametrize calculator function====================== -->
<?php
function rev($a)
{
    for($i=strlen($a)-1; $i>=0; $i--)
    {
        echo $a[$i];
    }  
}
rev("rajan");
?>

<!-- ==============parametrize calculator function====================== -->
<?php
function alpha($a)
{
    // for($i>=0; $i=strlen($a)-1;  $i--)
    // {
        if($a==ord("97"))
        {
            echo $a[$i];
            echo "it is lower case";
        }
        else{
            echo "it is lower case";

        }
        
    // }  
}
alpha("rajan");
echo"<br>";
?>

<!-- ==============prime number function====================== -->
<?php
function prime($n) {
    // if($n>=1)
    // {
    //     return "it is not prime number";
    // }
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0 ) {
            return "it is not prime number";
        }
    }
    echo 'it is prime number';   
}
prime(7);
?>




