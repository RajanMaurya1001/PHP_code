<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate']))
    {
        if(empty($_POST['name']))
        {
            echo "Name Field is Requared";
        }elseif(empty($_POST['email']))
        {
            echo "Email field is Requaired";
        }
        else{
            <pre>
            echo $_POST['name'];
            echo $_POST['email'];
            </pre>
        }
    }

}

?>
<form action="" method="post">
    name: <input type="text" name="name">
    Email: <input type="text" name="email">
    <input type="submit" value="validate" name="validate">
</form>