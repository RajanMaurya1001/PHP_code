<?php

$con = mysqli_connect('localhost', 'root', '', 'app25_crud');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['uid'];
    $oldimages = $_POST['oldimages'];

    if (empty($_FILES['file']['tmp_name'][0])) {
        $images = $oldimages;
    } else {
        $uploaded_images = [];
        foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['file']['name'][$key];

            if (move_uploaded_file($tmp_name, "images/$file_name")) {
                $uploaded_images[] = $file_name;
            }
        }
        $images = implode(",", $uploaded_images);
    }

    $sql = "UPDATE multiplefiles SET images='$images' WHERE id=$id";
    
    if (mysqli_query($con,$sql)) {
        echo "<script>
            alert('Data updated successfully');
            window.location.href='multipleRead.php';
         </script>";
     } 
    
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM multiplefiles WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $record = mysqli_fetch_assoc($result);
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
            <input type="hidden" value="<?= $record['id'] ?>" name="uid">
            File:<input type="file" multiple name="file[]">
            <input type="hidden" name="oldimages" value="<?= $record['images'] ?>">
            <img src="images/<?= $record['images'] ?>" alt="" width="50px" height="50px">
            <button type="submit">submit</button>
        </form>
    </body>

    </html>

<?php
} else {
    header('location:multipleRead.php');
}
?>