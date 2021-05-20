<?php
$host="localhost";
$user="YOUR_USERNAME";
$password="YOUR_PASSWORD";
$db="YOUR_DB"; 
$link = mysqli_connect($host,$user,$password);
mysqli_select_db($link,$db);
?>