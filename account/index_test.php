<?php
$errid =0;
if (isset($_GET["errid"]))
	$errid = $_GET["errid"];
$msg ="";
if ($errid==1)
	$msg = "Invalid User Name / Password";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="theme/assets/images/favicon.ico">
        <!-- App title -->
        <title>Zircos - Responsive Admin Dashboard Template</title>

        <!-- App css -->
        <link href="theme/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="theme/assets/js/modernizr.min.js"></script>
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

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.html" class="text-success">
                                            <span><img src="theme/assets/images/logo.png" alt="" height="36"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="auth.php">


                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <table class="table m-0 table-colored table-primary">
													<tr><td class=tdtext>Username :</td><td><input type=text name="username" size=10  maxlength=7></td></tr>
													<tr><td class=tdtext>Password :</td><td><input type=password name="MyPass" size=10 ></td></tr>
													<tr><td class=tdtext>Select Role :</td><td class=tdtext >
														<select name="usertype" size="1">
														<option value="employee">Employee</option>
														<option value="admin">Admin</option>
														<option value="client" selected="">Client</option>
														</select>&nbsp;</td></tr>
													</table>

                                            </div>
                                        </div>

                                        <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12">
                                                <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button name = "submit"  value="submit" class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="theme/assets/js/jquery.min.js"></script>
        <script src="theme/assets/js/bootstrap.min.js"></script>
        <script src="theme/assets/js/detect.js"></script>
        <script src="theme/assets/js/fastclick.js"></script>
        <script src="theme/assets/js/jquery.blockUI.js"></script>
        <script src="theme/assets/js/waves.js"></script>
        <script src="theme/assets/js/jquery.slimscroll.js"></script>
        <script src="theme/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="theme/assets/js/jquery.core.js"></script>
        <script src="theme/assets/js/jquery.app.js"></script>

    </body>
</html>