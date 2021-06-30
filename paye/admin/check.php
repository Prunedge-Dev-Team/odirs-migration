<?php
	session_start();
	if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] == ''){
		header('location: applicant_login.php');
	}
?>