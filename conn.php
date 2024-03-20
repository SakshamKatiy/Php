<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$db = 'revesionPhp';
$conn = mysqli_connect($host,$user,$password,$db);
// if($conn){
//     echo 'connection successfully';
// }
// else{
//     die(mysqli_error());
// }

// echo '<br>';

// $query = "create database revesionPhp";
// if(mysqli_query($conn,$query))
// echo 'database created';
// else {
//     echo 'database not created';
// }

$query = "create table students(id int(30) primary key auto_increment,name varchar(40), mail varchar(40),location varchar(20))";

if(mysqli_query($conn,$query)){
    echo "table created successfully";
}else{
    echo "not created";
}
?>