
<?php
include("adminheader.php");
$id=$_REQUEST['id'];
$query = "SELECT * from emp_details where emp_id ='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Net Salary Record</h1>
<?php
$status = "";
if(true)
{
$sel_query="Select * from emp_details where emp_id = ".$_SESSION['id'].";";
$result = mysqli_query($con,$sel_query);

$id=$_REQUEST['id'];
$emp_name = $row['emp_name'];
$aadhar_no = $row['aadhar_no'];
$join_date = $row['join_date'];
$basic_salary = $row['basic_salary'];
$designation = $row['designation'];

	//$stmt = mysqli_prepare($con, "CALL update_emp_details(?,?,?,'',?,?,?)");
	//mysqli_stmt_bind_param($stmt, "ssssss", $id,$aadhar_no,$emp_name,$join_date,$designation,$basic_salary);

	//$stmt->execute();
	$sel_query2="select accountant_database.calculate_net_salary(".$id.") as 'netSalary';";
	$result2 = mysqli_query($con,$sel_query2) or die( mysqli_error());
	$row2 = mysqli_fetch_assoc($result2);
	if($row2['netSalary'] == null)	
		$netSalary = 0;
	else
		$netSalary = $row2['netSalary'];
	

	//$update="update emp_details set emp_name ='". $emp_name ."', aadhar_no ='". $aadhar_no ."', join_date ='". $join_date ."',basic_salary ='". $basic_salary ."', designation ='". $designation ."' where emp_id='".$id."';";
	//mysqli_query($con, $update) or die(mysqli_error());


}else { echo "ERROR"; }

?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['emp_id'];?>" />
<table width="30%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>Employee Name</td>
    <td><?php echo $row['emp_name'];?></td>
  </tr>
  <tr>
    <td>Aadhar NO.</td>
    <td><?php echo $row['aadhar_no'];?></td>
  </tr>
  <tr>
    <td>Join Date</td>
    <td><?php echo $row['join_date'];?></td>
  </tr>
  <tr>
    <td>Basic Salary</td>
    <td><?php echo $row['basic_salary'];?></td>
  </tr>

  <tr>
    <td>Designation</td>
    <td><?php echo $row['designation'];?></td>
  </tr>

  <tr>
    <td>Net Salary</td>
    <td><?php echo $netSalary;?>
	</td>
  </tr>
  <tr>
    <td></td>
    <td><input name="submit2" type="submit" value="Update Record" /></td>

  </tr>
</table>

</form>

</div>
</div>
</body>
</html>