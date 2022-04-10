<?php
$errid =0;
if (isset($_GET["errid"]))
	$errid = $_GET["errid"];
$msg ="";
if ($errid==1)
	$msg = "Invalid User Name / Password";
?>
<html>
<head>
<title>C l i e n t&nbsp;&nbsp;&nbsp;L o g i n </title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type=text/css>
A:hover {
        COLOR: #425367

}
.textblk {
        COLOR: #ffffff; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; FONT-SIZE: 11px; TEXT-DECORATION:
none; FONT-WEIGHT: bold
}

</STYLE>
<style>
.tdtext
{
   FONT-FAMILY: Verdana; FONT-SIZE: 12px; COLOR: #425367
}
.tdheading
{
   FONT-FAMILY: Verdana; FONT-SIZE: 13px; COLOR: #425367; FONT-WEIGHT: bold
}
.style1 {
	text-align: center;
	font-family: Verdana;
	color: #FF0000;
}
</style>

<script language=javascript>
function validate_emp_fields()
{
  if (document.login.emp_no.value.length==0)
   {
      window.alert("Please enter your valid email address!");
      document.login.emp_no.focus();
      return false;
   }
       if (document.login.MyPass.value.length==0)
   {
      window.alert("Please enter your password!");
      document.login.MyPass.focus();
      return false;
   }
   	var pass=document.login.MyPass.value;
	document.login.MyPass.value=hex_enc(pass);	
   return true;
}


</script>

<script language="JavaScript" src="js/enc.js"> </script>
<script language="JavaScript" type="text/JavaScript">
</script>

</head>

<body leftmargin="1" topmargin="0" marginwidth="0" marginheight="0" bgcolor='#ffffff'>
<div align="left"></div>
<br><br>

<center>
<img src="images/accoutant.png" >

<table border="0" cellpadding="0" cellspacing="0" style="width: 997px; ">
  <tr>
    <td valign="middle" align="left" style="height: 308px">


<form name=login action="auth.php" method=post onSubmit="return validate_emp_fields()">
<table width=50% align=center border=1 cellpadding=1 cellspacing=1 bordercolor=#A8B9CD>
<tr><td height=0 style="width: 493px" class="style1">
	Login with your registered user id </td></tr>
<tr><td height=0 style="width: 493px">
<table align=center border=0 cellpadding=0 cellspacing=0>
<tr><td class=tdheading align=center></td></tr>
<tr><td align="center" class=tdheading>Login to our website...</td></tr>
<tr><td class=tdheading align=center>&nbsp;</td></tr>
</table>
<table align=center border=0>
<tr><td class=tdtext>Username :</td><td><input type=text name="username" size=10  maxlength=7></td></tr>
<tr><td class=tdtext>Password :</td><td><input type=password name="MyPass" size=10 ></td></tr>
<tr><td class=tdtext>Select Role :</td><td class=tdtext >
	<select name="usertype" size="1">
	<option value="employee">Employee</option>
	<option value="admin">Admin</option>
	<option value="client" selected="">Client</option>
	</select>&nbsp;</td></tr>
</table>
<table align=center border=0 width=50%>

<tr><td align=center>
<input type=submit name=submit class=tdheading value="Login"></td></tr>
</table>
</td></tr></table>
<div align="center" style="color:red">
<br>
		<?php
		echo $msg;
		?>
	</div>
<table border="0" width="100%" cellpadding="6" style="border-collapse: collapse" bordercolor="#000000">
	<tr>
		<td class=tdheading align="center">&nbsp;</td>
	</tr>
	<tr>
		<td class=tdheading align="center">System Time   <?php echo date('l jS \of F Y h:i:s A');   ?></td>
	</tr></table>
</form>

</td>

</table>
</center>
</body>
</html>

