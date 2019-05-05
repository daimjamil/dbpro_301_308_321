<?php

session_start();
header('location:Employee.php');

$con = mysqli_connect('localhost', 'root', 'neurontin23');

mysqli_select_db($con, 'employeedb');

$employeename = $_POST['employeename'];
$employeecnic = $_POST['employeecnic'];
$employeephone = $_POST['employeephone'];
$employeeaddress = $_POST['employeeaddress'];

$s = "select * from employeedb where EmployeeName = '$employeename'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}
else{
    $reg= "insert into employeedb(EmployeeName , EmployeeCNIC , EmployeePhone , EmployeeAddress) values ('$employeename' , '$employeecnic' , '$employeephone' , '$employeeaddress')";
    mysqli_query($con, $reg);
    echo" Registration Sucessful";
}

?>