<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['validate'])) {
        if (empty($_POST['subject'])) {
            echo "<script>
               alert('Please Select atleast one field');
            </script>";
        } else {
            print_r($_POST['subject']);
        }
    }
}

?>

<form action="" method="post">
    <label for="" name="check">skills</label>
    <input type="checkbox" name="subject[]" value="HTML">HTML
    <input type="checkbox" name="subject[]" value="CSS">CSS
    <input type="checkbox" name="subject[]" value="JS">JS
    <input type="checkbox" name="subject[]" value="PHP">PHP

    <!-- <small style="color:red"><?= isset($_GET['checkerror']) ? $_GET['checkerror'] : '' ?></small> -->
    <input type="submit" value="validate" name="validate">
</form>