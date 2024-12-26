<?php

$con= mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=='POST');
{
    if(empty($_POST['fname'])){
        echo " <script>
        alert('Plaese Enter Your fName');
        window.location.href='create.php';
        </script>";
    }elseif
    (empty($_POST['lname'])) {
        echo " <script>
        alert('Plaese Enter Your lName');
        window.location.href='create.php';
        </script>";
    } elseif (empty($_POST['mobile'])) {
        echo " <script>
        alert('Plaese Enter Your phone');
        window.location.href='create.php';
        </script>";
    } elseif (empty($_POST['email'])) {
        echo " <script>
        alert('Plaese Enter Your email');
        window.location.href='create.php';
        </script>";
    }else{
        $fname =$_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['mobile'];
        $email = $_POST['email'];
        $sql = "Insert into user_regg(fname,lname,mobile,email) values('$fname','$lname','$phone','$email')";
        if(mysqli_query($con,$sql))
        {
                echo " <script>
                alert('Data Iserted Succesfully');
                window.location.href='read.php';
                </script>";
        }
    }
}
?>