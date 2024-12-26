<?php

$con= mysqli_connect('localhost','root', '', 'php');
if($con)
{
    echo "connection stablished";
}
else{
    echo mysqli_connect_error();
}

// $sql = "CREATE TABLE new (id INT(5) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), email VARCHAR(25))";
//$sql = "CREATE TABLE user1 (id INT(5) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), email VARCHAR(25))";
// echo mysqli_query($con, $sql);

// $sql = "CREATE TABLE user2 (id INT(5) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), email VARCHAR(25) , number int(13));";
// $sql .= "CREATE TABLE user3 (id INT(5) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), email VARCHAR(25),number int(13));";
// $sql .= "CREATE TABLE user4   (id INT(5) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), email VARCHAR(25),number int(13));";

// echo mysqli_multi_query($con, $sql);


// $sql = "INSERT INTO new(name, email) values('Rajan', 'rajan@gmil.com')";
// $sql = "INSERT INTO new(name, email) values('Rajneesh', 'rajan@gmil.com')";
// $sql = "INSERT INTO new(name, email) values('Rajeev', 'rajan@gmil.com')";
// $sql = "INSERT INTO new(name, email) values('Raj', 'rajan@gmil.com')";
// echo mysqli_query($con, $sql);
// if(mysqli_query($con, $sql))
// {
//     echo "data inserted";
// }
// else{
//     echo "data Notinserted";
// }



// ===============data insert from multiple function================
// $sql = "INSERT INTO user2(name, email) values('Rajan', 'rajan@gmil.com');";
// $sql .= "INSERT INTO user3(name, email) values('Rajneesh', 'rajan@gmil.com');";
// $sql .= "INSERT INTO user1(name, email) values('Rajeev', 'rajan@gmil.com');";
// $sql .= "INSERT INTO user2(name, email) values('Raj', 'rajan@gmil.com');";
// $sql .= "INSERT INTO user2(name, email) values('Ram', 'rajan@gmil.com');";
// $sql = "INSERT INTO user2(number) values(1234765467) where id=1";

// echo mysqli_multi_query($con, $sql);


// --------------------delete Data from table-----------

// $sql= "Delete from user1 where id=7";
// echo mysqli_query($con,$sql);

// --------------------update Data from table-----------

$sql = "Update user2 set number= 9374657873 where id=3";
echo mysqli_query($con, $sql);

// ---------Select table name(for table data fetch)-------------

// $sql = "Select * from user1";
// $result= mysqli_query($con, $sql);
// echo mysqli_num_rows($result);


// echo "<pre>";
// // print_r(mysqli_fetch_all($result, MYSQLI_ASSOC));
// // print_r(mysqli_fetch_assoc($result));
// while($record = mysqli_fetch_assoc($result))
// {
//     print_r($record['name']);
// }
?>