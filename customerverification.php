<?php
include_once('Customer Verification.php');
$query = "select * from customerdb";
$result=mysql_query($query);
?>

<!DOCTYPE html>
<html>
<title>
    <head>
    Fetch Data From Database</head>
    </title>
    <body>
        <table align="center" border="1px" style="width:500px; line-height:30px;">
        <tr>
            <th colspan="5"><h2>VERIFIED CUSTOMERS</h2></th>
        </tr>
        <t>
        <th>Customer Name</th>
        <th>Customer CNIC</th>
        <th>Customer DOB</th>
        <th>Customer Phone#</th>
        <th>Customer Address</th>
        </t>
        
            <?php
            while($rows=mysql_fetch_assoc($result))
            {
            ?>
                <tr>
                    <td><?php echo $rows['CustomerName']; ?></td>
                    <td><?php echo $rows['CustomerCNIC']; ?></td>
                    <td><?php echo $rows['CustomerDOB']; ?></td>
                    <td><?php echo $rows['CustomerPhone']; ?></td>
                    <td><?php echo $rows['CustomerAddress']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>
    
</html>


<?php

mysql_connect('localhost', 'root', 'neurontin23');
mysql_select_db('customerdb');
$sql="SELECT * FROM customerdb";
$records=mysql_query($sql);
?>

<html>
<head>
<title> Verified Customers</title>    
</head>
<body>
<table width="600" bodrder="1" cellpadding="1" cellspacing="1">
    <tr>
        <th>Customer Name</th>
        <th>Customer CNIC</th>
        <th>Customer DOB</th>
        <th>Customer Phone#</th>
        <th>Customer Address</th>
    </tr>
<?php
    while($customer=mysql_fetch_assoc($records))
    {
        echo  "<tr>";
        
        echo "<td>".$customer['CustomerName']."</tr>";
        <td>".$customer['CustomerCNIC']."</tr>";
        <td>".$customer['CustomerDOB']."</tr>";
        <td>".$customer['CustomerPhone']."</tr>";
        <td>".$customer['CustomerAddress']."</tr>";
        
            echo "</tr>";
    }
    ?>
    
    
    
    </table>
    
    </body>


</html>