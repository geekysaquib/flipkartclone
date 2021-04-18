<?php 
session_start();
if(isset($_POST['submit']))
{
		
	$host="localhost";
	$user="root";
	$password="";
	$db="payment"; 
	$link = mysqli_connect($host,$user,$password);
	mysqli_select_db($link,$db);
	
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	
	
	if($Email=="payment@studyeze.in" and $Password=="codingathon2020@team")
	{
		$_SESSION['session']=$Email;
		header("Location:transaction.php");
	}
	else
	{
		echo "<script>alert('Incorrect Username & Password.....');</script>";
	}
	

}

?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-products/logdy/main/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Apr 2020 16:27:04 GMT -->
<head>
    
    <title>Codingathon 2020 Team | Studyeze | E-Learning Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body id="top">
<div class="page_loader"></div>

<!-- Login 3 start -->
<div class="login-3 tab-box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-pad-0 form-section">
                <div class="login-inner-form">
                    <div >
                        <a href="#">
                            <img src="assets/img/logos/logo_transparent.png" alt="logo">
                        </a>
                        <h3>Sign into team account</h3>
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password" required="">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn-md btn-theme btn-block">Login</button>
                            </div>
                            <p class="none-2">Don't forget to logout after you login to the Team Account</p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-pad-0 bg-img none-992">
                <div class="informeson">
                    
                    <h3>TEAM CODINGATHON 2020 </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                    <div class="social-box">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-color"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-color"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-color"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin-color"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 3 end -->

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->

</body>

<!-- Mirrored from storage.googleapis.com/themevessel-products/logdy/main/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Apr 2020 16:27:15 GMT -->
</html>