<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orderList</title>
</head>
<body>
    <ol start="1">
        <?php
        $countryName = ["India","Pakistan","China","America","Australia","Russia","Ukrain",
        "Izrael","Iran","UAE","Qatar","Saudi Arabia","Kazakistan","Afganistan","South Africa","Westendies",
        "North Koria","South Koria","Iraq","Franc","Japan","Maldive","Srilanka","Bangladesh",
        "Mayamar","Nepal","Canada","England","Brazil","Kenya","taiwan","Bhutan","Malaysia","syria","Vietnam","Austria","Latvia",
        "Azarbaijan","Somalia","Hong Kong","Singapore","Norway","Hungari","Uganda","Mongolia","Cuba","Kuwait","Indonesia","fiji","Germany"];


        // for($i=0;$i<=28;$i++)
        //  {
        //     echo "<li>$countryName[$i]</li>";
        //  }
        foreach($countryName as $name):
            echo "<li>$name</li> ";
        endforeach
           
        ?>
    </ol>
    
</body>
</html>