<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['validate'])) {
        if (empty($_POST['name'])) {
            header("Location: validation2.php?nameerror=name field is required");
        } elseif (empty($_POST['email'])) {
            header("Location: validation2.php?emailerror=email field is required");
        } elseif (empty($_POST['number'])) {
            header("Location: validation2.php?numbererror=number field is required");
        } elseif (empty($_POST['Gender'])) {
            header("Location: validation2.php?gendererror=gender field is required");
        } elseif (empty($_POST['select'])) {
            header("Location: validation2.php?selecterror=select field is required");
        } elseif (empty($_POST['subject'])) {
            header("Location: validation2.php?subjecterror=check field is required");
        } else {
            echo "my name is :" . $_POST['name'] . "<br>",
            " and email is :" . $_POST['email'] . "<br>",
            " and number is :" . $_POST['number'] . "<br>",
            " and gender is :" . $_POST['Gender'] . "<br>",
            " and country is :" . $_POST['select'] . "<br>";
            // " and education is :" . $_POST['subject'];
            " and education is :" . print_r($_POST['subject']);
        }
    }
}
