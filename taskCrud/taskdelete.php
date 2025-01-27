<?php

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '', 'app25_crud');
    $sql= "Delete from task_tbl where id=$id";

    if(mysqli_query($con,$sql))
    {
         echo " <script>
          alert('data Deleted Succesfully');
          window.location.href='taskread.php';
        </script> ";
    } else {
        header('location:taskread.php');
    }
}



?>