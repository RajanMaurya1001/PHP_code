<!-- using filter create a form -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $ip = "127.0.0.1";
    if (empty($name)) {
        echo "name is required";
    } elseif (empty($email)) {
        echo "email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo " please enter valid email";
    } elseif (filter_var($ip, FILTER_VALIDATE_IP)) {
        echo "ip address not valid";
    } else {
        echo 'ip is valid';
    }
}
?>
<form action="" method="post">
    <input type="name" name="name">
    <input type="email" name="email">
    <button type> submit</button>
</form>