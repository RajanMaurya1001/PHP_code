<?php
echo "<pre>";
$a=$_POST['$a'];

for($i=1; $i<=10; $i++)
{
    echo "<br>";
    echo $i*$a;
}

?>
<form action="" method="post">
    <label for="">Name</label>
    <input type="number" name='$a'>
    <button type="submit">submit</button>
</form>