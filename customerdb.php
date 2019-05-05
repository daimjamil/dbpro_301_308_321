<?php

session_start();
header('location:Customers.php');

$con = mysqli_connect('localhost', 'root', 'neurontin23');

mysqli_select_db($con, 'customerdb');

$customername = $_POST['customername'];
$customercnic = $_POST['customercnic'];
$customerdob = $_POST['customerdob'];
$customerphone = $_POST['customerphone'];
$customeraddress = $_POST['customeraddress'];

$s = "select * from bankdb where customername = '$customername'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{
    $reg= "insert into customerdb(CustomerName , CustomerCNIC , CustomerDOB , CustomerPhone , CustomerAddress ) values ('$customername' , '$customercnic' , '$customerdob' , '$customerphone' , '$customeraddress')";
    mysqli_query($con, $reg);
    echo" Registration Sucessful";
}

?>