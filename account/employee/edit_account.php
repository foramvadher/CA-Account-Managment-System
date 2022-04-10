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
$id=$_REQUEST['id'];
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
      <label for="textfield">Search Account ID</label>
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
<th><strong>Account No.</strong></th>
<th><strong>Bank Name</strong></th>
<th><strong>Bank Branch</strong></th>
<th><strong>Account Type</strong></th>
<th><strong>Statment</strong></th>
<th><strong>Approval</strong></th>
<th>&nbsp;</th>
</tr>
</thead>
<tbody>
<?php
//echo $_SESSION['id'];
$count=1;
$sel_query="Select acc.* ,b.* s.statement,s.approval from client_account_details acc join bank_details b on acc.bank_id = b.bank_id join client_account_statement s on acc.client_id = s.client_id where client_id = ".$id;
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["account_no"]; ?></td>
<td align="center"><?php echo $row["bank_name"]; ?></td>
<td align="center"><?php echo $row["branch_name"]; ?></td>
<td align="center"><?php echo $row["account_type"]; ?></td>
<td align="center"><?php echo $row["statement"]; ?></td>
<td align="center"><?php echo $row["approval"]; ?></td>


<td align="center">
<a href="edit_client.php?id=<?php echo $row['client_id']; ?>">Edit </a>&nbsp;&nbsp;&nbsp;</td>

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
