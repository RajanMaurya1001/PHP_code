<?php
echo "<pre>";
echo "My Name is :- ".$_POST["name"]."<br>";
echo "My Email is :- ".$_POST["email"]."<br>";
// echo "My Name is".$_POST["name"]."<br>";
// print_r($_POST);

?>
<form action="" method="post">
    <label for="">Name</label>
    <input type="text" name="name">
    <label for="">Email</label>
    <input type="text" name="email">
    <button type="submit">submit</button>
</form>