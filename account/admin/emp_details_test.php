<?php

include("../db.php");

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
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Codertheme">

        <link rel="shortcut icon" href="theme/assets/images/favicon.ico">

        <title>Zircos - Responsive Admin Dashboard Template</title>

        <!-- App css -->
        <link href="theme/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="theme/plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="theme/assets/js/modernizr.min.js"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--Zircos-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="theme/assets/images/logo.png" alt="" height="30">
                        </a>

                    </div>
                    <!-- End Logo container-->


                  

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                       <?php include('admin_header_menu.php');?>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                
                            </div>
                            <h4 class="page-title"> Employee Details</h4>
							
							<div class="demo-box">
                                        
                                        <a href="add_emp.php" class = "btn btn-md btn-success" >Add New Employee </a>
<hr/>
                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored table-primary">
                                                <thead>
                                                    <tr>
														<th><strong>S.No</strong></th>
														<th><strong>Employee ID</strong></th>
														<th><strong>Name</strong></th>
														<th><strong>Aadhar No</strong></th>
														<th><strong>Join Date</strong></th>
														<th><strong>Designation</strong></th>
														<th><strong>Salary</strong></th>
														<th><strong>Resume</strong></th>
														<th>
														Options</th>
																												</tr>
                                                </thead>
                                                <tbody>
                                                    
                                                        <?php

$count=1;
$sel_query="Select * from emp_details where (emp_id like '%$txtsearch%' or emp_name like '%$txtsearch%') ORDER BY emp_id;";

if (isset($_REQUEST['maxPendingApp']))
	$sel_query = "Select * from emp_details where emp_id in (select max_pending_approval_emp());";
if (isset($_REQUEST['empOfMonth']))
	$sel_query = "Select * from emp_details where emp_id in (select emp_of_month());";
//if (isset($_REQUEST['maxPendingApp']))
//	$sel_query = "Select * from emp_details where emp_id in (select max_account_client());";
if (isset($_REQUEST['calcNetSal']))
		header("Location: calcNetSalary.php");
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["emp_id"]; ?></td>
<td align="center"><?php echo $row["emp_name"]; ?></td>
<td align="center"><?php echo $row["aadhar_no"]; ?></td>
<td align="center"><?php echo $row["join_date"]; ?></td>
<td align="center"><?php echo $row["designation"]; ?></td>
<td align="center"><?php echo $row["basic_salary"]; ?></td>
<td align="center"><?php echo $row["emp_id"]; ?></td>

<td align="center">
<a href="edit_emp.php?id=<?php echo $row["emp_id"]; ?>">Edit</a>
<a href="calcNetSalary.php?id=<?php echo $row["emp_id"]; ?>">Calculate Net Salary</a></td>

</tr>

<?php $count++; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                © 2016 - 2018 Zircos.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- jQuery  -->
        <script src="theme/assets/js/jquery.min.js"></script>
        <script src="theme/assets/js/bootstrap.min.js"></script>
        <script src="theme/assets/js/detect.js"></script>
        <script src="theme/assets/js/fastclick.js"></script>
        <script src="theme/assets/js/jquery.blockUI.js"></script>
        <script src="theme/assets/js/waves.js"></script>
        <script src="theme/assets/js/jquery.slimscroll.js"></script>
        <script src="theme/assets/js/jquery.scrollTo.min.js"></script>
        <script src="theme/plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="theme/assets/js/jquery.core.js"></script>
        <script src="theme/assets/js/jquery.app.js"></script>

    </body>
</html>