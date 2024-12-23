<?php
echo "<pre>";

print_r($_POST);

?>
<form action="" method="post">
<select name="country" id="" style="width:20%; padding: 4px;">
    <option value="India">India </option>
    <option value="Pakistan">Pakistan </option>
    <option value="America">America </option>
</select>
<label for="">Gender</label>
 <input type="radio" name="Gender" value="Baap">Baap
 <input type="radio" name="Gender" value="Beta">Beta

 <input type="color" name="color" >
 <textarea name="textarea" id="" cols="10" rows="3" name="textarea"></textarea>

 <button type="submit">submit</button>
</form>

<div style="height:200px; width:200px; background:<?= $_POST['color']?>"></div>