<?php 
	include("../main/head.php");
	session_start();

	unset($_SESSION['id']);
	unset($_SESSION['password']);

	header("location: ../main/main.php")
?>