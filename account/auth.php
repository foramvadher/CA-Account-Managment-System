<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
$usertype=$_POST["usertype"];
$userid=$_POST['username'];
$password=$_POST["MyPass"];
include("db.php");

  
  $sql="select * from login_master where  user_name='" . $userid . "' and pass_word='". $password . "' and user_type = '" . $usertype. "' ";
  $result = mysqli_query($con,$sql);
//while($row = mysqli_fetch_assoc($result)) {
 if (mysqli_num_rows($result)>0)  //valid user
  {
      $found="true";
      $row =  mysqli_fetch_assoc($result);
      $_SESSION['id']=$userid;
      $_SESSION['usertype']=$usertype;
      $_SESSION['user_id']=$row["user_id"];
      
	
	        $log_description="Log in user:" . $non_emp_name;
	  if ($usertype == 'employee'){  
		  header("Location: employee/emp_home.php");
		  }
	  else if ($usertype == 'admin')
		  header("Location: admin/admin_home.php");
	  else if ($usertype == 'client')
		  header("Location: client/client_home.php");
	  else
		  header ("Location: error.php"); 
  }
 else
	{
	echo $sql;
     	header ("Location: index.php?errid=1");
	}
?>
