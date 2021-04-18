<?php
	session_start();
    $name = $_SESSION['Name'];
    $email = $_SESSION['admin'];
    session_destroy();
    session_start();
     require('config.php');
    $_SESSION['email']=$email;
    $_SESSION['Name']=$name;
    if (!isset($_SESSION['email'])) {
    	header('Location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!--<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />-->
	<title>QUIZOPHILE</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
   <!-- <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>

    <meta name="keywords" content="wizard, bootstrap wizard, creative tim, long forms, 3 step wizard, sign up wizard, beautiful wizard, long forms wizard, wizard with validation, paper design, paper wizard bootstrap, bootstrap paper wizard">
    <meta name="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">-->

    <!-- Schema.org markup for Google+ -->
   <!-- <meta itemprop="name" content="Paper Bootstrap Wizard by Creative Tim">
    <meta itemprop="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">-->

    <!-- Twitter Card data -->
   <!-- <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Paper Bootstrap Wizard by Creative Tim">
    <meta name="twitter:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">-->

    <!-- Open Graph data -->
    
	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="timer/style.css">
	<script src="timer/1.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="nav/stylen.css">
	<!-- Google Tag Manager 
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>-->
	<!-- End Google Tag Manager -->
	</head>

	<body>
		<!-- Google Tag Manager (noscript) -->
	<!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
	<!-- End Google Tag Manager (noscript) -->
	<div class="image-container set-full-height" style="background: url(wallpaper2.jpg);">
		
	    <!--   Creative Tim Branding   -->
	    <!--<a href="https://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>
	        </div>
	    </a>-->

		<!--  Made With Paper Kit  -->
		<!--<a href="https://demos.creative-tim.com/paper-kit" class="made-with-pk">
			<div class="brand">PK</div>
			<div class="made-with">Made with <strong>Paper Kit</strong></div>
		</a>-->

	    <!--   Big container   -->
	    <div class="container">
	    		<div class="row"  style="padding-top: 2px;margin-top: 2px;">
	       
		        
		   				<div id="app">
					<div class="base-timer">
  						<svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    						<g class="base-timer__circle">
      							<circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      								<path
        								id="base-timer-path-remaining"
        								stroke-dasharray="283"
        								class="base-timer__path-remaining ${remainingPathColor}"
        								d="
          								M 50, 50
          								m -45, 0
          								a 45,45 0 1,0 90,0
          								a 45,45 0 1,0 -90,0
        								"
      								></path>
      								<span id="base-timer-label" class="base-timer__label"></span>
    							</g>
  						</svg>
  						
					</div>
				</div>
				<div id="app1">
		<nav>
			<ul>
				<li>
					<a href="#"><?php echo $_SESSION['Name'];?></a>
				</li>
				<li>
					<a href="#">|</a>
				</li>
				<li>
					<a href="#">Logout</a>
				</li>
			</ul>
		</nav>
	</div>

					<div class="col-sm-8 col-sm-offset-2" style="margin-top: 2px;">
		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">

		                    <form action="demo2.php" id="form" method="POST">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<!--<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Create your profile</h3>
									<p class="category">This information will let us know more about you.</p>
		                    	</div>-->

								<div class="wizard-navigation">
									<!--<div class="progress-with-circle" >
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="15" style="width: 21%;"></div>
									</div>-->
									<ul>
			                            <li>
											<a href="#1" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-user">1</b>
												</div>
												1
											</a>
										</li>
			                            <li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-settings">2</b>
												</div>
												2
											</a>
										</li>
			                            <li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-map">3</b>
												</div>
												3
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">4</b>
												</div>
												4
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">5</b>
												</div>
												5
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">6</b>
												</div>
												6
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">7</b>
												</div>
												7
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">8</b>
												</div>
												8
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">9</b>
												</div>
												9
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">10</b>
												</div>
												10
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">11</b>
												</div>
												11
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">12</b>
												</div>
												12
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">13</b>
												</div>
												13
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">14</b>
												</div>
												14
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle">
													<b class="t-abc">15</b>
												</div>
												15
											</a>
										</li>		
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="1">
		                            	<div class="row">
											 <h3 class="info-text">1. Which type of copy is shown in the following python code?
</h3>
   												 <pre>l1=[[10, 20], [30, 40], [50, 60]]
ls=list(l1)
ls
[[10, 20], [30, 40], [50, 60]]
</pre>
													
											
											<div class="col-sm-6">
												<div class="form-group">
													<input type="radio" value="Shallow copy" id="Fastlearning" name="Q1">
       												<label for="Fastlearning"> Shallow copy</label><br/>
    											<input type="radio" value="Deep copy" name="Q1">
       												<label> Deep copy</label><br/>
    											<input type="radio" value="Memberwise" name="Q1">
       												<label> Memberwise</label> <br/>
    											<input type="radio" value="All of the above mentioned" name="Q1">
     												<label> All of the above mentioned</label>

     											
												</div>
											</div>
										</div>

		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <!--<input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />-->
		                                <input type='submit' class='btn btn-next btn-fill btn-warning btn-wd' name='finish' value='Next' />
		                            </div>

		                            
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                    
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    
		
	</div>
	<script type="text/javascript">
		window.onload = function() {
// Onload event of Javascript
// Initializing timer variable
/*var x = 20;
var y = document.getElementById("timer");
// Display count down for 20s
setInterval(function() {
if (x <= 21 && x >= 1) {
x--;
y.innerHTML = '' + x + '';
if (x == 1) {
x = 21;
}
}
}, 1000);*/
// Form Submitting after 20s
var auto_refresh = setInterval(function() {
submitform();
}, 60000);
// Form submit function
function submitform() {


document.getElementById("form").submit();
}

};
	</script>
	

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/ -->	 
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script> 

</html>