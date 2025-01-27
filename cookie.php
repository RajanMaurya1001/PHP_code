<?php
setcookie('user','ram',time()+3600);
print_r($_COOKIE['user']);
// setcookie('use','');
// print_r($_COOKIE['use']);

setcookie('use',$_SERVER['REMOTE_ADDR'],time()+3600);
print_r($_COOKIE['use']);


?>