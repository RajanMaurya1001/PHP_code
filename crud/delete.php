<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '', 'app25_crud');
    $sql = "delete from user_regg where id=$id";
    if (mysqli_query($con, $sql)) {
        echo
        " <script>
            alert('Data deleted Succesfully');
            window.location.href='read.php';
        </script>";
    } else {
        header('location:read.php');
    }
}
 