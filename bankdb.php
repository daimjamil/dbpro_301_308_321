<?php

session_start();
header('location:Bank.php');

$con = mysqli_connect('localhost', 'root', 'neurontin23');

mysqli_select_db($con, 'bankdb');

$bankname = $_POST['bankname'];
$branch = $_POST['branch'];
$address = $_POST['address'];

$s = "select * from bankdb where BankName = '$bankname'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{
    $reg= "insert into bankdb(BankName , Branch , Address) values ('$bankname' , '$branch' , '$address')";
    mysqli_query($con, $reg);
    echo" Registration Sucessful";
}

?>