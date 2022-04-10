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
<h1>Insert New Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$emp_name = $_POST['emp_name'];
$aadhar_no = $_POST['aadhar_no'];
$join_date = $_POST['join_date'];
$basic_salary = $_POST['basic_salary'];
$designation = $_POST['designation'];



if(isset($_REQUEST['submit1']))
{
	$stmt = mysqli_prepare($con, "CALL insert_emp_details(?,?,'',?,?,?)");
	mysqli_stmt_bind_param($stmt, "sssss",$aadhar_no,$emp_name,$join_date,$designation,$basic_salary);

	$stmt->execute();
	
	if(isset($_FILES['filetoupload'])){
      $errors= array();
      $file_name = $_FILES['filetoupload']['name'];
      echo $file_name;
      $file_size =$_FILES['filetoupload']['size'];
      $file_tmp =$_FILES['filetoupload']['tmp_name'];
      $file_type=$_FILES['filetoupload']['type'];
      $tmp = explode('.', $file_name);
      $file_ext=strtolower(end($tmp));
      
      $extensions= array("pdf","doc");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a pdf file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      $file_name = $aadhar_no . '.' . $file_ext;
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

	//$insert = "insert into emp_details (emp_name,aadhar_no,join_date,basic_salary,designation) values ('$emp_name','$aadhar_no','$join_date','$basic_salary','$designation');";
	//mysqli_query($con, $insert) or die(mysqli_error());
}

$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action="" enctype="multipart/form-data"> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="" />
<table width="30%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>Employee Name</td>
    <td><input type="text" name="emp_name" placeholder="Enter name" required value="" style="backNetGroup-color:transparent"/></td>
  </tr>
  <tr>
    <td>Aadhar NO.</td>
    <td><input type="text" name="aadhar_no" placeholder="Enter aadhar_no" required value="" /></td>
  </tr>
  <tr>
    <td>Join Date</td>
    <td><input type="text" name="join_date" placeholder="Enter Join Date" required value="" /></td>
  </tr>
  <tr>
    <td>Basic Salary</td>
    <td><input type="text" name="basic_salary" placeholder="Enter basic_salary" required value="" /></td>
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
    <td>Resume :</td>
    <td>
	<input type="file" name="filetoupload" /></td>
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