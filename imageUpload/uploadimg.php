<?php
$con = mysqli_connect('localhost', 'root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=="POST"){
foreach($_FILES['file']['name'] as $key=>$val){
    // echo $val;
    // echo $_FILES['file']['tmp_name'][$key];
    move_uploaded_file($_FILES['file']['tmp_name'][$key],"images/$val");
}
$images = implode(',',$_FILES['file']['name']);
$sql = "Insert into multiplefiles(images) values('$images')";
if(mysqli_query($con, $sql)){
    echo " <script>
    alert('Image Upload');
    window.location.href = 'multipleRead.php';
    </script>";
}

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        File:<input type="file" multiple name="file[]">
        <button type="submit">submit</button>
    </form>
</body>

</html>