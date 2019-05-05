<?php

session_start();
header('location:Department.php');

$con = mysqli_connect('localhost', 'root', 'neurontin23');

mysqli_select_db($con, 'departmentdb');

$departmentname = $_POST['departmentname'];

$s = "select * from departmentdb where departmentname = '$departmentname'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{
    $reg= "insert into departmentdb(DepartmentName) values ('$departmentname')";
    mysqli_query($con, $reg);
    echo" Registration Sucessful";
}

?>