<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
$usertype=$_SESSION['usertype'];
$userid=$_SESSION['user_id'];
require('../db.php');
//include("../auth.php");
?>

<html>
<head>
<title>A d m i n - M e n u</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type=text/css>
A:hover {
	COLOR: #425367

}
.textblk {
	COLOR: #ffffff; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; FONT-SIZE: 11px; TEXT-DECORATION: none; FONT-WEIGHT: bold
}

</STYLE>
<style>
.tdtext
{
   FONT-FAMILY: Verdana; FONT-SIZE: 11px; COLOR: #000000; TEXT-DECORATION: none
}
.tdheading
{
   FONT-FAMILY: Verdana; FONT-SIZE: 13px; COLOR: #000000; FONT-WEIGHT: BOLD
}

</style>
</head>

<body leftmargin="1" topmargin="0" marginwidth="0" marginheight="0" bgcolor='#ffffff'>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="750" bgcolor="#A8B9CD" style ="text-align:center;height:150px;" colspan="6"><img src="../images/accoutant.png"></td>
   	
  </tr>
  <tr>
    <td width="750" bgcolor="#A8B9CD" style ="text-align:center;height:50px; width: -3000;">
	<a href="client_details.php">Client</a></td>
   	
    <td width="750" bgcolor="#A8B9CD" style ="text-align:center;height:50px; width: -1125;">
	&nbsp;</td>
   	
    <td width="750" bgcolor="#A8B9CD" style ="text-align:center;height:50px; width: -500;">
	&nbsp;</td>
   	
    <td width="750" bgcolor="#A8B9CD" style ="text-align:center;height:50px; width: -187;">
	&nbsp;</td>
   	
    <td width="750" bgcolor="#A8B9CD" style ="text-align:center;height:50px; width: 0;">
	&nbsp;</td>
   	
    <td width="750" bgcolor="#A8B9CD" style ="text-align:center;height:50px; width: 125px;">
	<a href="emp_home.php">home</a></td>
   	
  </tr>
</table>

</body>
</html>