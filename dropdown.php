<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Box</title>
</head>
<body>
    <select name="" id="">
        <option value="">--select country--</option>
        <?php
        $country = ["india","china","russia","pakistan","izrael"];
        //  for($i=0;$i<=4;$i++)
        //  {
        //     echo "<option value=''>$country[$i]</option>";
        //  }
        foreach($country as $value)
        {
            echo "<option value=''>$value</option>";
        }
        ?>
    </select>

    <select name="" id="">
        <option value="">--select country--</option>
        <?php
        $country = ["india","china","russia","pakistan","izrael"];
        //  for($i=0;$i<=4;$i++)
        //  {
        //     echo "<option value=''>$country[$i]</option>";
        //  }
        foreach($country as $value)
        {    
        ?>
        <!-- <option value=''><?php //echo $value; ?></option>; -->
        <option value=''><?= $value ?></option>;
        <?php
        }
        ?>
    </select>
    
</body>
</html>