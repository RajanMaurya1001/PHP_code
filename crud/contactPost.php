<?php

$con= mysqli_connect('localhost','root','','app25_crud');
if($con)
{
    echo "connection stablished";
}
else{
    echo "error";
}

if($_SERVER['REQUEST_METHOD']=='POST');
{
    if(empty($_POST['name']))
    {
        echo "<script> 
        alert('Please enter your name');
        window.location.href='contact.php';
        </script> ";
    }elseif(empty($_POST['email'])) {
        echo "<script> 
        alert('Please enter your email');
        window.location.href='contact.php';
        </script> ";
    } elseif (empty($_POST['message'])) {
        echo "<script> 
        alert('Please enter your message');
        window.location.href='contact.php';
        </script> ";
    }else{
        $name =$_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql= "Insert into contact_tbl(name,email,message) values('$name','$email','$message')";
       if( mysqli_query($con,$sql))
       {
         echo " <script>
             alert('data inserted succesfully');
             window.location.href='contactData.php';
         </script> ";
       }

    }



}