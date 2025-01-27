<?php
$con = mysqli_connect('localhost', 'root', '', 'app25_crud');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // if (empty($_POST['name'])) {
    //     echo "<script>
    //     alert('Name field required');
    //     </script> ";
    // // } elseif (empty($_FILES['image']['name'])) {
    // //     echo "<script>
    // //     alert('Image field required');
    // //     </script> ";
    $id = $_POST['uid'];
    $name = $_POST['name'];
    if (empty($_FILES['image']['name'])) {
        $filename = $_POST['oldimage'];
    } else {
        $filename = time() . $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname, "../upload/$filename");
        $sql = "Update fileupload set name='$name', images='$filename' where id=$id";
        if (mysqli_query($con, $sql)) {
            echo "<script>
            alert('Data updated succesfully');
            window.location.href='read.php';
             </script> ";
        }
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '', 'app25_crud');
    $sql = "Select * from fileupload where id = $id";
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
            Name:<input type="text" value="<?= $record['name'] ?>" name="name">
            File:<input type="file" value="" name="image">
            <input type="hidden" value="<?= $record['images'] ?>" name="oldimage">
            <img src="../upload/<?= $record['images'] ?> " alt="" width="50px" height="50px">
            <button type="submit">submit</button>
        </form>
    </body>



    </html>
<?php
} else {
    header('location:contactData.php');
}
?>