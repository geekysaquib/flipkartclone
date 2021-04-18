<?php
	session_start();
    $email = $_SESSION['email14'];
    $name=$_SESSION['Name'];
    session_destroy();
    session_start();
    require('config.php');
     $_SESSION['email15']=$email;
   $_SESSION['Name']=$name;
   if (!isset($_SESSION['email15'])) {
    	header('Location:index.php');
    }
      if(isset($_POST['Q14'])){
    $SESSION['Q14']=$_POST['Q14'];
    $Q14=$_POST['Q14'];
  }
  else{
    $SESSION['Q14']="-";
    $Q14="-";
  }
   $sql="UPDATE answerpythonquiz SET Q14='".$Q14."' WHERE email='".$email."'";
    $sqli= mysqli_query($link,$sql);


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
	<link rel="stylesheet" type="text/css" href="nav/stylen.css">
	<script src="timer/1.js" type="text/javascript"></script>
	
	</head>

	<body>
	<div class="image-container set-full-height" style="background: url(wallpaper2.jpg);">
	  
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
		                    <form action="submit.php" id="form" method="POST">
		               

								<div class="wizard-navigation">
									
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
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-settings">2</b>
												</div>
												2
											</a>
										</li>
			                            <li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-map">3</b>
												</div>
												3
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">4</b>
												</div>
												4
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">5</b>
												</div>
												5
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">6</b>
												</div>
												6
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">7</b>
												</div>
												7
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">8</b>
												</div>
												8
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">9</b>
												</div>
												9
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">10</b>
												</div>
												10
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">11</b>
												</div>
												11
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">12</b>
												</div>
												12
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">13</b>
												</div>
												13
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
													<b class="t-abc">14</b>
												</div>
												14
											</a>
										</li>
										<li>
											<a href="#" data-toggle="tab">
												<div class="icon-circle" style="background-color: #F3BB45; color: white;">
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
											 <h3 class="info-text">15-What will be the output shape of the following Python code?</h3>
   												 <pre>import turtle
t=turtle.Pen()
for i in range(0,4):
	t.forward(100)
	t.left(120)</pre>
													
											
											<div class="col-sm-6">
												<div class="form-group">
													<input type="radio" value="square" id="Fastlearning" name="Q15">
       												<label for="Fastlearning">square</label><br/>
    											<input type="radio" value="rectangle" name="Q15">
       												<label> rectangle</label><br/>
    											<input type="radio" value="triangle" name="Q15">
       												<label> triangle</label> <br/>
    											<input type="radio" value="kite" name="Q15">
     												<label> kite</label>
     												
												</div>
											</div>
										</div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <!--<input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />-->
		                                <input type='submit' class='btn btn-next btn-fill btn-warning btn-wd' name='finish' value='Finish' />
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

alert('Form is submitting.....');
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