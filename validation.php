<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'neurontin23');

mysqli_select_db($con, 'user');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:Bank.html');
}else{
    header('location:login.php');
}

?>