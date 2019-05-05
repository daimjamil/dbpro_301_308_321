<html>
<head>
<title> LOAN MANAGEMENT SYSTEM </title>
<link rel="stylesheet" type="text/css" href="stylesharp.css">
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<h1> LOAN MANAGEMENT SYSTEM </h1>
<div class="menu">
<div class="btn"><a href="Bank.php"><i class="fa fa-university" aria-hidden="true"></i>Bank</a></div>
<div class="btn"><a href = "Department.php"><i class="fa fa-building-o" aria-hidden="true"></i>Department</a></div>
<div class="btn"><a href = "Employee.php"><i class="fa fa-male" aria-hidden="true"></i>Employee</a></div>
<div class="btn"><a href = "Customers.php"><i class="fa fa-user" aria-hidden="true"></i>Customer</a></div>
<div class="btn"><a href = "Customer Verification.php"><i class="fa fa-check" aria-hidden="true"></i>Customer Verification</a></div>
<div class="btn"><a href = "Loan details.php"><i class="fa fa-info-circle" aria-hidden="true"></i>Loan Details</a></div>
</div>
 

<div id="InsertBox">
      <div class="center">
        <h1> BANK INFORMATION</h1>
          
          
          <form action="bankdb.php" method="post">
		<div class="form-group">
			
			<input type="text" name="bankname" class="form-control" required placeholder="Bank Name">
			</div>
		<div class="form-group">
			
			<input type="text" name="branch" class="form-control" required placeholder="Branch Name">
			</div>
        <div class="form-group">
			
			<input type="text" name="address" class="form-control" required placeholder="Address">
			</div>
            <input type="submit" name="insert-button" value="ADD"/>
			
        </form>
</div>
</div>



</body>
</html>