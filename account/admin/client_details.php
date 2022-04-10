<?php
include("adminheader.php");


$txtsearch = "";
if (isset($_POST['txtsearch']))
	$txtsearch =$_POST['txtsearch'];
else
	if (isset($_GET['user']))
		$txtsearch =$_GET['user'];
	else
		$txtsearch ='';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h2>Edit Records</h2><form name="form1" method="post" action="">
<table width="30%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td>
      <label for="textfield">Search Client Name or ID</label>
      <input type="text" name="txtsearch" id="txtsearch" value = '<?php echo $txtsearch?>'>    </td>
    <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
</table> 

<p>
	<table width="40%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td><input type="submit" name="maxAccClient" value="Max. Account Client">
	 </td>
    <td><input type="submit" name="maxLoanClient" value="Max. Loan Client"></td>
    <td>
	<input type="submit" name="maxInvestClient" value="Max. Investment Client"></td>
    </tr>
</table> 
</p>
</form>
<table width="50%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Client ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Aadhar No</strong></th>
<th><strong>PAN no</strong></th>
<th><strong>Contact No</strong></th>
<th><strong>Mail Address</strong></th>
<th><strong>Assigned Employee</strong></th>
<th>
<a href="add_client.php">Add New</a></th>
</tr>
</thead>
<tbody>
<?php

$count=1;
$sel_query="Select c.*,e.emp_name from client_details c join (select ec.client_id, emp.emp_name from client_emp ec join emp_details emp on emp.emp_id = ec.emp_id) e on e.client_id = c.client_id where (c.client_id like '%$txtsearch%' or client_name like '%$txtsearch%') ORDER BY c.client_id;";


if (isset($_REQUEST['maxAccClient']))
	$sel_query = "Select c.*,e.emp_name from client_details c join (select ec.client_id, emp.emp_name from client_emp ec join emp_details emp on emp.emp_id = ec.emp_id) e on e.client_id = c.client_id where c.client_id in (select max_account_client());";


if (isset($_REQUEST['maxLoanClient']))
	$sel_query = "Select c.*,e.emp_name from client_details c join (select ec.client_id, emp.emp_name from client_emp ec join emp_details emp on emp.emp_id = ec.emp_id) e on e.client_id = c.client_id where c.client_id in (select max_loan_client());";

if (isset($_REQUEST['maxInvestClient']))
	$sel_query = "Select c.*,e.emp_name from client_details c join (select ec.client_id, emp.emp_name from client_emp ec join emp_details emp on emp.emp_id = ec.emp_id) e on e.client_id = c.client_id where c.client_id in (select max_investment_client());";

$result = mysqli_query($con,$sel_query);

while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["client_id"]; ?></td>
<td align="center"><?php echo $row["client_name"]; ?></td>
<td align="center"><?php echo $row["aadhar_no"]; ?></td>
<td align="center"><?php echo $row["pan_no"]; ?></td>
<td align="center"><?php echo $row["contact_no"]; ?></td>
<td align="center"><?php echo $row["email_address"]; ?></td>
<td align="center"><?php echo $row["emp_name"]; ?></td>


<td align="center">
<a href="edit_client.php?id=<?php echo $row["client_id"]; ?>">Edit</a></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
<?php
?>
</center>
</div>
</body>
</html>