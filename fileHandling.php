<?php
// readfile("test.txt");
?> 

<!-- ----------fopen & fread-------------->
<?php
// $data = fopen("test.txt","r");
// // echo fread($data,filesize('test.txt'));
// echo "<br>";
// echo fgets($data);
// echo "<br>";
// while(!feof($data))
// {
//     echo fgetc($data);
// }

// fclose($data);

// echo filesize('test.txt')
?>

<!-- ================fwrite()=it is used to create a file with text.========================= -->
<?php
// $new=fopen("demo.txt","w");
// $data="fwrite()=it is used to create a file with text.";
// fwrite($new,$data);
// fputs($new,$data);
// fclose($new);

?>

<!-- ================append================ -->
<!-- <?php
// $new=fopen("demo.txt",'a');
// echo "<br>";
// fwrite($new,"it is aapend method to use insert data in exsiting files");
// fclose($new);
?> -->

<!-- ================r+================ -->
<?php
// $new=fopen("demo.txt",'r+');
// // echo fread($new,filesize("demo.txt"));
// fwrite($new,"this is read & write mode");
// echo fread($new,filesize("demo.txt"));
// fclose($new);
?>



<!-- ================w+================ -->
<?php
// $res=fopen("tech.txt",'w+');
// fwrite($res,"this is text file");
// fseek($res, 0);
// echo fread($res,filesize("demo.txt"));
// fclose($res);
?>

<!-- ============file handel=============== -->
<?php
$res = fopen("techwomen.jpg","r");
$photo = fread($res,filesize("techwomen.jpg"));
$dest = fopen("tech.jpg","w");
fwrite($dest,$photo);
fclose($dest);
fclose($res);
?>