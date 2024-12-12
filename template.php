<?php
$a =10;

if($a++==10 && ++$a != 12):
    echo "sahi hai";

elseif($a-- + ++$a > 20):
    echo $a;
endif;

?>

<?php
$a =10;
if($a++ == 10 && ++$a !== 12):
    echo "sahi hai";
    // echo $a;
elseif(--$a + $a++ == 24):
    echo "thats it..";

elseif($a - $a++ + --$a < 25):
    echo "sahi hai";
    echo $a;

endif;

?>