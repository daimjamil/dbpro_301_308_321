<?php
$con = mysqli_connect('localhost', 'root','neurontin23','customerdb');
?>

<html>
<head>
<title> LOAN MANAGEMENT SYSTEM </title>
<link rel="stylesheet" type="text/css" href="stylesharp.css">
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    table{
        width:800px;
        margin:auto;
        text-align: center;
        table-layout: fixed;
        }
    table, tr, th, td
    {
        padding: 20px;
        color: white;
        border: 1px solid #080808;
        border-collapse: collapse;
        font-size: 18px;
        font-family: sans-serif;
        background: linear-gradient(top, #3c3c3c 0%, #222222 100%);
        background: -webkit-linear-gradient(top, #3c3c3c 0%, #222222 100%);
    }
    td:hover
    {
        background: grey;
    }

    
    
</style>    

    
    
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

<h2>VERIFIED CUSTOMERS</h2>
  
    <table class="table table-striped">
        <tr>
            <th>Customer Name</th>
            <th>Customer CNIC</th>
            <th>Customer DOB</th>
            <th>Customer Phone</th>
            <th>Customer Address</th>  
        </tr>
        <?php
        $select = 'select * from customerdb';
        $run = mysqli_query($con,$select);
        while($show=mysqli_fetch_array($run))
        {
          
        ?>
            
        <tr>
            <td><?php echo $show['CustomerName']; ?></td>
            <td><?php echo $show['CustomerCNIC']; ?></td>
            <td><?php echo $show['CustomerDOB']; ?></td>
            <td><?php echo $show['CustomerPhone']; ?></td>
            <td><?php echo $show['CustomerAddress']; ?></td>
            
        </tr>
        <?php
            
        }
        ?>
    </table>
    



</body>
</html>