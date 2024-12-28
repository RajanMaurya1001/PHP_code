<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dropdown Form</title>
</head>

<body>
    <form action="dropdownForm_db.php" method="post">
        <select value="" style="width:20%; padding:10px;" name="selectbox">
            <option value="Space">Space</option>
            <option value="Galaxy">Galaxy</option>
            <option value="Country">Country</option>
            <option value="state">state</option>
        </select>
        <br>
        <br>
        <label for="">Skill</label><br>
        <input type="checkbox" value="Html" name="subject[]">Html
        <input type="checkbox" value="css" name="subject[]">CSS
        <input type="checkbox" value="js" name="subject[]">JS
        <input type="checkbox" value="PHP" name="subject[]">PHP
        <br>
        <input type="submit" name="validate" style="margin-top:10px; background-color:aqua;">
    </form>
</body>

</html>