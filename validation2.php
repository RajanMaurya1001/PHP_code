<form action="validatePost.php" method="post">
    name: <input type="text" name="name">
    <small style="color:red"><?= isset($_GET['nameerror']) ? $_GET['nameerror'] : '' ?></small>
    Email: <input type="text" name="email">
    <small style="color:red"><?= isset($_GET['emailerror']) ? $_GET['emailerror'] : '' ?></small>
    Number: <input type="text" name="number">
    <small style="color:red"><?= isset($_GET['numbererror']) ? $_GET['numbererror'] : '' ?></small>
    <label for="">Gender</label>
    <input type="radio" name="Gender" value="Baap">Baap
    <input type="radio" name="Gender" value="Beta">Beta
    <small style="color:red"><?= isset($_GET['gendererror']) ? $_GET['gendererror'] : '' ?></small>

    <select name="select" id="">
        <option value="">--Select Country--</option>
        <option value="india">india</option>
        <option value="pakistan">pakistan</option>
        <option value="america">america</option>
        <option value="china">china</option>
    </select>
    <small style="color:red"><?= isset($_GET['selecterror']) ? $_GET['selecterror'] : '' ?></small>
    <label for="" name="check">skills</label>
    <input type="checkbox" name="subject[]" value="HTML">HTML
    <input type="checkbox" name="subject[]" value="CSS">CSS
    <input type="checkbox" name="subject[]" value="JS">JS
    <input type="checkbox" name="subject[]" value="PHP">PHP

    <small style="color:red"><?= isset($_GET['subjecterror']) ? $_GET['subjecterror'] : '' ?></small>
    <input type="submit" value="validate" name="validate">

</form>