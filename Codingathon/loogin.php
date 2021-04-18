<?php
	require("config.php");
	session_start();
	if(isset($_POST['login']))
	{
		$ename=$_POST['EMAIL'];
		$pass=$_POST['MOBILE'];

		$sql="select * from pythonquizparticipant where EMAIL='".$ename."' AND MOBILE='".$pass."' limit 1";
		$sqli="select * from answerpythonquiz where email='".$ename."' limit 1";
		$resulti=mysqli_query($link,$sqli);
		$counti=mysqli_num_rows($resulti);
		$result=mysqli_query($link,$sql);
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			if($counti==0)
			{
			while($row=mysqli_fetch_assoc($result))
			{
				$_SESSION['admin']=$row['EMAIL'];
				$_SESSION['Name']=$row['NAME'];
				header("Location:demo1.php");
			}
		}
		else{
			header('Location:reattempting.php');
		}
		}
		else
		{
			echo "Incorrect details.!!!Try Again";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN FORM</title>
		<link rel="stylesheet" type="text/css" href="csss/style.css">
	</head>
	<body>
		<div class="inbox">
			<h1>LOGIN HERE</h1><br>
			<form action="loogin.php" method="POST">
				<table>
					<tr>
				<td><label>User ID:</label></td>
				<td><input type="text" name="EMAIL" placeholder="email id"></td>
				</tr><tr></tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td><label>Password:</label></td>
				<td><input type="password" name="MOBILE" placeholder="enter mobile number"></td>
			</tr></table><br><br>
				<input type="submit" name="login" value="login">
			</form>
		</div>
	</body>
</html>