<?php 
	require_once 'functions.php';
	$appname = 'Chatbox';
	$userstr = '(Guest)';
	$style = '';

	//Check User
	if (isset($_SESSION['userlogin']))
	{
		$user 		= $_SESSION['userlogin'];
		$password   = $_SESSION['passlogin'];
		$loggedin 	= TRUE;
		$userstr	= " ($user)";
		destroy_session_and_data();
		header('Location: http://localhost:8881/Chat-Box%20Default/chatbox.php');

	}
	else
	{ 
		$loggedin = FALSE;
		
	} 
