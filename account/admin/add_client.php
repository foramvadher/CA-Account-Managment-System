<?php
include("adminheader.php");
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
<h1>Insert New Client</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$client_name = $_POST['client_name'];
$aadhar_no = $_POST['aadhar_no'];
$pan_no = $_POST['pan_no'];
$contact_no = $_POST['contact_no'];
$email_address = $_POST['email_address'];


if(isset($_REQUEST['submit1']))
{
	$stmt = mysqli_prepare($con, "CALL insert_client_details(?,?,?,?,?)");
	mysqli_stmt_bind_param($stmt, "sssss",$client_name,$aadhar_no,$pan_no,$contact_no,$email_address);

	$stmt->execute();

}

$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="" />
<table width="30%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>Client Name</td>
    <td><input type="text" name="client_name" placeholder="Enter name" required value="" style="backNetGroup-color:transparent"/></td>
  </tr>
  <tr>
    <td>Aadhar NO.</td>
    <td><input type="text" name="aadhar_no" placeholder="Enter aadhar_no" required value="" /></td>
  </tr>
  <tr>
    <td>PAN no.</td>
    <td><input type="text" name="pan_no" placeholder="Enter PAN No." required value="" /></td>
  </tr>
  <tr>
    <td>Contact No.</td>
    <td><input type="text" name="contact_no" placeholder="Enter Contact No." required value="" /></td>
  </tr>
  <tr>
    <td>Mail addr.</td>
    <td><input type="text" name="email_address" placeholder="Enter valid Mail addr" required value="" /></td>
  </tr>


  <tr>
    <td>&nbsp;</td>
    <td><input name="submit1" type="submit" value="Insert New Record" /></td>

  </tr>
</table>

</form>
<?php } ?>
</div>
</div>
</body>
</html>