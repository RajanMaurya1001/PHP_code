<?php

// echo ($_SERVER('PHP_SELF')); for self page data collection
//  "<?= $_SERVER('PHP_SELF')>";
print_r($_REQUEST);
?>
<form action="secondRequest.php" method="POST">
    <label for="first">Name</label>
    <input type="text"  id="first"  name="name">

    <input type="submit">
</form>