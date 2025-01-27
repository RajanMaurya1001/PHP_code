<?php
$email = "rajan@gmail.com";
$id = "100";
// var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
// var_dump($email);
filter_var($email, FILTER_SANITIZE_STRING);
// var_dump($email);
echo filter_var($id, FILTER_SANITIZE_NUMBER_INT);

echo isset($_POST['email']) ? $_POST['email'] : '';
?>
<form action="" method="post">
    <input type="email" name="email" required>
    <button type> submit</button>
</form>