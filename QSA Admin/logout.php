<?php
session_start();
header("Location:index.php");
if(!isset($_SESSION['session']))
{
    header("Location:index.php");
}
session_destroy();
?>