<?php
$con = mysqli_connect('localhost', 'root', '', 'app25_crud');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "<script>
        alert('Name field required');
        </script> ";
    } elseif (empty($_FILES['image']['name'])) {
        echo "<script>
        alert('Image field required');
        </script> ";
    } else {
        $name = $_POST['name'];
        $filename = time() . $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname, "../upload/$filename");
        $sql = "Insert into fileupload(name,images) values('$name','$filename')";
        if (mysqli_query($con, $sql)) {
            echo "<script>
            alert('Data inserted succesfully');
            window.location.href='read.php';
             </script> ";
        }
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
        Name:<input type="text" name="name">
        File:<input type="file" name="image">
        <button type="submit">submit</button>
    </form>
</body>

</html>