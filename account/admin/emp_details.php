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

<h2>Edit Employee</h2><form name="form1" method="post" action="">
<table width="40%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td>
      <label for="textfield">Search Employee Name or ID</label>
      <input type="text" name="txtsearch" id="txtsearch" value = '<?php echo $txtsearch?>'>    </td>
    <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
</table> 
		<br> 
<table width="40%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td><input type="submit" name="empOfMonth" value="Employee Of the Month"></td>
    <td><input type="submit" name="maxPendingApp" value="Max. Pending Approval Employee"></td>
    <td><input type="submit" name="totalPay" value="Total Employee Salary"></td>
    
    </tr>
</table> 

	
		
</form>
<table width="50%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Employee ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Aadhar No</strong></th>
<th><strong>Join Date</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Salary</strong></th>
<th><strong>Resume</strong></th>
<th>
<a href="add_emp.php">Add New</a></th>
</tr>
</thead>
<tbody>
<?php

$count=1;
$sel_query="Select * from emp_details where (emp_id like '%$txtsearch%' or emp_name like '%$txtsearch%') ORDER BY emp_id;";

if (isset($_REQUEST['maxPendingApp']))
	$sel_query = "Select * from emp_details where emp_id in (select max_pending_approval_emp());";
if (isset($_REQUEST['empOfMonth']))
	$sel_query = "Select * from emp_details where emp_id in (select emp_of_month());";
//if (isset($_REQUEST['maxPendingApp']))
//	$sel_query = "Select * from emp_details where emp_id in (select max_account_client());";
if (isset($_REQUEST['calcNetSal']))
		header("Location: calcNetSalary.php");
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["emp_id"]; ?></td>
<td align="center"><?php echo $row["emp_name"]; ?></td>
<td align="center"><?php echo $row["aadhar_no"]; ?></td>
<td align="center"><?php echo $row["join_date"]; ?></td>
<td align="center"><?php echo $row["designation"]; ?></td>
<td align="center"><?php echo $row["basic_salary"]; ?></td>
<td align="center"><?php echo $row["emp_id"]; ?></td>

<td align="center">
<a href="edit_emp.php?id=<?php echo $row["emp_id"]; ?>">Edit</a></td>
<td align="center">
<a href="calcNetSalary.php?id=<?php echo $row["emp_id"]; ?>">Calculate Net Salary</a></td>

</tr>

<?php $count++; } ?>
</tbody>
</table>
</center>
</div>
</body>
</html>