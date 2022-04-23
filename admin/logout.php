<?php
	session_start();
	unset($_SESSION['avid']);
	unset($_SESSION['avnhom']);
	unset($_SESSION['avfullname']);
	header("location:login.php");
?>