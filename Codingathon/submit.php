<?php
   session_start();
    $email = $_SESSION['email15'];
    session_destroy();
    session_start();
    require('config.php');
     $_SESSION['emailsubmit']=$email;
      if (!isset($_SESSION['emailsubmit'])) {
      header('Location:index.php');
    }   
      if(isset($_POST['Q15'])){
    $SESSION['Q15']=$_POST['Q15'];
    $Q15=$_POST['Q15'];
  }
  else{
    $SESSION['Q15']="-";
    $Q15="-";
  }
   $sql="UPDATE answerpythonquiz SET Q15='".$Q15."' WHERE email='".$email."'";
   if(mysqli_query($link,$sql))
   {
    header("Location:thankyou.php");
   }
   else{
    echo "failed";
   }
  /*if(mysqli_query($link,$sql))
   {
    header("Location:thankyou.php");
  } 
  else{
    echo("error");
  }*/
  
  ?>