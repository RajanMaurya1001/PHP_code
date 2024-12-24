<?php
echo "<pre>";
$con = mysqli_connect('localhost', 'root', '', 'app25');
if ($con) {
    echo "connection stablished";
} else {
    echo "something went wrong";
    echo mysqli_connect_error(); 
}

// $sql ="Create table user(id int(20) primary key, name varchar(25),email varchar(50))";
// echo mysqli_query($con,$sql);
// if(mysqli_query($con,$sql))
// {
//     echo "data inserted succesfuly";
// }
// else{
//     echo "error";
// }

$sql = "INSERT INTO user(id, name, email) VALUES (2, 'Rajan', 'rajan@gmail.com');";
$sql .= "INSERT INTO user(id, name, email) VALUES (4, 'Raj', 'raj@gmail.com');";
$sql .= "INSERT INTO user(id, name, email) VALUES (5, 'Raja', 'raja@gmail.com');";
$sql .= "INSERT INTO user(id, name, email) VALUES (6, 'Rajneesh', 'rajneesh@gmail.com');";
$sql .= "INSERT INTO user(id, name, email) VALUES (7, 'Raju', 'raju@gmail.com');";
$sql .= "INSERT INTO user(id, name, email) VALUES (8, 'Rajendra', 'rajendra@gmail.com');";
$sql .= "INSERT INTO user(id, name, email) VALUES (9, 'Rakesh', 'rakesh@gmail.com');";

mysqli_multi_query($con, $sql);


?>