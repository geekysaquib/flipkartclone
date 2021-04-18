<?php
session_start();
$email = $_SESSION['emailsubmit'];
    //$name=$_SESSION['Name'];
    session_destroy();
    session_start();
    require('config.php');
     $_SESSION['thankyou']=$email;
      if (!isset($_SESSION['thankyou'])) {
      header('Location:index.php');
    }   
   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Submission Successfull | Codingathon 2020 | Quizophile Python</title>
</head>
<body>
	<div style="margin-top: 200px;">
		<center><H1>Your Response has been Submitted Successfully for:<br><?php echo $_SESSION['thankyou'];?> </H1></center><br>

		<center><button><a href="logout.php">Logout</a></button></center>
	</div>
</body>
</html>