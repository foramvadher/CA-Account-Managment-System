
<?php
include("empheader.php");
$id=$_REQUEST['id'];
$query = "SELECT * from client_details where client_id ='".$id."'"; 
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
<h1>Update Client Details</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$client_name = $_POST['client_name'];
$aadhar_no = $_POST['aadhar_no'];
$pan_no = $_POST['pan_no'];
$contact_no = $_POST['contact_no'];
$email_address = $_POST['email_address'];

if (isset($_REQUEST['submit2']))
{
	$stmt = mysqli_prepare($con, "CALL update_client_details(?,?,?,?,?,?)");
	mysqli_stmt_bind_param($stmt, "ssssss", $id,$client_name,$aadhar_no,$pan_no,$contact_no,$email_address);

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
<input name="id" type="hidden" value="<?php echo $row['client_id'];?>" />
<table width="30%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>Client Name</td>
    <td><input type="text" name="client_name" placeholder="Enter name" required value="<?php echo $row['client_name'];?>" style="backNetGroup-color:transparent"/></td>
  </tr>
  <tr>
    <td>Aadhar NO.</td>
    <td><input type="text" name="aadhar_no" placeholder="Enter aadhar_no" required value="<?php echo $row['aadhar_no'];?>" /></td>
  </tr>
  <tr>
    <td>PAN no.</td>
    <td><input type="text" name="pan_no" placeholder="Enter PAN no." required value="<?php echo $row['pan_no'];?>" /></td>
  </tr>
  <tr>
    <td>Contact no.</td>
    <td><input type="text" name="contact_no" placeholder="Enter Contact no." required value="<?php echo $row['contact_no'];?>" /></td>
  </tr>

  <tr>
    <td>Email Address</td>
    <td><input type="text" name="email_address" placeholder="Enter email_address" required value="<?php echo $row['email_address'];?>" /></td>
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