<?php 
	require_once 'functions.php';
	$appname = 'Chatbox';
	$userstr = '(Guest)';
	$style = '';

	//Check User
	if ($_SESSION['userlogin'] !== "")
	{
		$user 		= $_SESSION['userlogin'];
		$loggedin 	= TRUE;
		$userstr	= " ($user)";
		header('Location: http://localhost:8881/Chat-Box%20Default/chatbox.php');
	}
	else
	{ 
		$loggedin = FALSE;
		
	} 
?>