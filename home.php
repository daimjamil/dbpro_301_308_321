<?php
session_start();
?>

<html>
<head>
<title> LOAN MANAGEMENT SYSTEM </title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<h1> LOAN MANAGEMENT SYSTEM </h1>
<div class="menu">
<div class="btn"><a href="Bank.html"><i class="fa fa-university" aria-hidden="true"></i>Bank</a></div>
<div class="btn"><a href = "Department.html"><i class="fa fa-building-o" aria-hidden="true"></i>Department</a></div>
<div class="btn"><a href = "Employee.html"><i class="fa fa-male" aria-hidden="true"></i>Employee</a></div>
<div class="btn"><a href = "Customers.html"><i class="fa fa-user" aria-hidden="true"></i>Customer</a></div>
<div class="btn"><a href = "Customer Verification.html"><i class="fa fa-check" aria-hidden="true"></i>Customer Verification</a></div>
<div class="btn"><a href = "Loan details.html"><i class="fa fa-info-circle" aria-hidden="true"></i>Loan Details</a></div>
</div>


<div id="InsertBox">
      <div class="center">
        <h1> BANK INFORMATION</h1>
          <input type="text" name="BankName" placeholder="Bank Name"/>
          <input type="text" name="Branch" placeholder="Branch"/>
          <input type="text" name="Address" placeholder="Address"/>
          <input type="submit" name="insert-button" value="ADD"/>        
</div>


</body>
</html>