<?php

session_start();
header('location:Loan Details.php');

$con = mysqli_connect('localhost', 'root', 'neurontin23');

mysqli_select_db($con, 'loandetailsdb');

$bankname = $_POST['bankname'];
$loantype = $_POST['loantype'];
$interest = $_POST['interest'];

$s = "select * from loandetailsdb where bankname = '$bankname'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{
    $reg= "insert into loandetailsdb(BankName , LoanType , Interest) values ('$bankname' , '$loantype' , '$interest')";
    mysqli_query($con, $reg);
    echo" Registration Sucessful";
}

?>