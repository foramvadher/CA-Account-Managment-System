<?php
include("empheader.php");
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

<h2>Client Records</h2><form name="form1" method="post" action="">
<table width="30%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td>
      <label for="textfield">Search Client Name or ID</label>
      <input type="text" name="txtsearch" id="txtsearch" value = '<?php echo $txtsearch?>'>    </td>
    <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
</table> 
</form>
<p>&nbsp;</p>
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
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>
</thead>
<tbody>
<?php
//echo $_SESSION['id'];
$count=1;
$sel_query="Select * from client_details where client_id in (select client_id from client_emp where emp_id = '".$_SESSION['id']."') and (client_name like '%$txtsearch%' or client_id like '%$txtsearch%') ORDER BY client_id";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["client_id"]; ?></td>
<td align="center"><?php echo $row["client_name"]; ?></td>
<td align="center"><?php echo $row["aadhar_no"]; ?></td>
<td align="center"><?php echo $row["pan_no"]; ?></td>
<td align="center"><?php echo $row["contact_no"]; ?></td>
<td align="center"><?php echo $row["email_address"]; ?></td>


<td align="center">
<a href="edit_client.php?id=<?php echo $row['client_id']; ?>">Edit </a>&nbsp;&nbsp;&nbsp;</td>
<td align="center">
<a href="edit_account.php?id=<?php echo $row["client_id"]; ?>">Account Details</a></td>
<td align="center">
<a href="edit_loan.php?id=<?php echo $row["client_id"]; ?>">Loan Details</a></td>
<td align="center">
<a href="edit_invest.php?id=<?php echo $row["client_id"]; ?>">Investment Details</a></td>

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