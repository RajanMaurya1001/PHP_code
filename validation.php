<?php

// if($_SERVER['REQUEST_METHOD']=='POST'){
//     if(isset($_POST['validate']))
//     {
//         if(empty($_POST['name']))
//         {
//             echo "Name Field is Requared";
//         }elseif(empty($_POST['email']))
//         {
//            echo"Email field is Requaired";
//         }
//         else{
//             echo $_POST['name'];
//             echo $_POST['email'];
//         }
//     } 

// }


$nameerror = $emailerror= '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate']))
    {
        if(empty($_POST['name']))
        {
            $nameerror = "Name Field is Requared";
        }
        if(empty($_POST['email']))
        {
            $emailerror = "Email field is Requaired";
        }
        
        if(!empty($_POST['name']) && !empty ($_POST['email'])){
            echo $_POST['name'];
            echo $_POST['email'];
        }
    } 

}

?>
<form action="" method="post">
    name: <input type="text" name="name">
    <small style="color:red"><?= $nameerror?></small>
    Email: <input type="text" name="email">
     <small style="color:red"><?= $emailerror?></small> 
    <input type="submit" value="validate" name="validate">
</form>