<?php 
session_start();
if(!isset($_SESSION['session']))
{
    header("Location:index.php");
}
	
?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/html/light/jquery-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 17:02:39 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Codingathon 2020 | Payment List | Studyeze</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- Custom Css -->
<link  rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="https://thememakker.com/templates/oreo/html/assets/images/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>        
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>




<section style="background-color:black"class="">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Codingathon 2020 | Registered Users List
                <small></small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="logout.php"><i class="zmdi zmdi-home"></i> Logout</a></li>
                    <li class="breadcrumb-item active">Payment List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12">
                
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples --> 
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Payment</strong> Table </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <?php
							$host="localhost";
							$user="root";
							$password="";
							$db="payment"; 
							$link = mysqli_connect($host,$user,$password);
							mysqli_select_db($link,$db);
							
							$fetchstatus="TXN_SUCCESS";
							$sql="select * from paytm where Status='".$fetchstatus."' ";
							$result=mysqli_query($link,$sql);
							$count = mysqli_num_rows($result);
							
							if($count)
							{   
								echo "<thead><th>Name</th>
								<th>Phone</th><th>College</th><th>Amount</th><th>Transc. Status</th></thead>";
								   
						
									//Mysqli Fetch Associative
								 while($row=mysqli_fetch_assoc($result))
								   {
									   //Saving the Data in Variable 
									   $_SESSION['name']=$row['Name'];
									   $_SESSION['phone']=$row['Phone'];
									   $_SESSION['cllgnm']=$row['Collegename'];
									   $_SESSION['amnt']=$row['Amount'];
									   $_SESSION['status']=$row['Status'];
								   
										echo "<tr>
										<td>".$_SESSION['name']."</td>
										<td>".$_SESSION['phone']."</td>
										<td>".$_SESSION['cllgnm']."</td>
										<td>".$_SESSION['amnt']."</td>
										<td>".$_SESSION['status']."</td></tr>";
                                
								   }
							}
							else
							{
								$default="No Data Found";
								echo "<tr>".$default."</tr>";

											
							}
							?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table --> 
    </div>
</section>


<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/html/light/jquery-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 17:02:42 GMT -->
</html>