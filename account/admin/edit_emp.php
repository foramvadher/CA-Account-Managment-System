
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
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$emp_name = $_POST['emp_name'];
$aadhar_no = $_POST['aadhar_no'];
$join_date = $_POST['join_date'];
$basic_salary = $_POST['basic_salary'];
$designation = $_POST['designation'];

if (isset($_REQUEST['submit2']))
{
	$stmt = mysqli_prepare($con, "CALL update_emp_details(?,?,?,'',?,?,?)");
	mysqli_stmt_bind_param($stmt, "ssssss", $id,$aadhar_no,$emp_name,$join_date,$designation,$basic_salary);

	$stmt->execute();

	//$update="update emp_details set emp_name ='". $emp_name ."', aadhar_no ='". $aadhar_no ."', join_date ='". $join_date ."',basic_salary ='". $basic_salary ."', designation ='". $designation ."' where emp_id='".$id."';";
	//mysqli_query($con, $update) or die(mysqli_error());

}

$status = "Record Updated Successfully. </br></br>
<a href='view.php?user=$id'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
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
    <td><input type="text" name="emp_name" placeholder="Enter name" required value="<?php echo $row['emp_name'];?>" style="backNetGroup-color:transparent"/></td>
  </tr>
  <tr>
    <td>Aadhar NO.</td>
    <td><input type="text" name="aadhar_no" placeholder="Enter aadhar_no" required value="<?php echo $row['aadhar_no'];?>" /></td>
  </tr>
  <tr>
    <td>Join Date</td>
    <td><input type="text" name="join_date" placeholder="Enter Join Date" required value="<?php echo $row['join_date'];?>" /></td>
  </tr>
  <tr>
    <td>Basic Salary</td>
    <td><input type="text" name="basic_salary" placeholder="Enter basic_salary" required value="<?php echo $row['basic_salary'];?>" /></td>
  </tr>

  <tr>
    <td>Resume </td>
    <td>
	&nbsp;</td>
  </tr>

  <tr>
    <td>Designation</td>
    <td>
	<select name="designation">
      <option value="employee">Employee</option>
      <option value="admin">Admin</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="submit2" type="submit" value="Update Record" /></td>

  </tr>
</table>

</form>
<?php } ?>
</div>
</div>
</body>
</html>