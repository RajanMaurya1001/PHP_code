<?php
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $con = mysqli_connect('localhost','root','','app25_crud');
    $sql = "Delete from contact_tbl where id = $id";
    if(mysqli_query($con, $sql))
    {
        echo
        " <script>
            alert('Data deleted Succesfully');
            window.location.href='contactData.php';
        </script>";
    } else {
        header('location:contactData.php');
    }
}
?>