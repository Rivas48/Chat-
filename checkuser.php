<?php
	//Check userlogin variable is not set to send back to home
	if($_SESSION['userlogin'] == ""){
		header('Location: http://localhost:8881/Chat-Box%20Default/index.php');
		queryMysql("UPDATE member SET status=0 WHERE user='$userlogin'"); 
	}else{
		$userlogin = $_SESSION['userlogin'];
	};

	//Click submit button
	if (isset($_POST['submit'])) {

		//Check and Stop the page from submitting on refresh
		if (isset($_POST['message']) and $_POST['message'] == $_SESSION['message']) 
		{ 	
		}else{
			$time = time('');
			$_SESSION['message']  = $_POST['message'];
			$newmessage = $_SESSION['message'];
				if ($newmessage != "") 
				{
					//query message,user,time to the database
				 	queryMysql("INSERT INTO messages VALUES(NULL, '$userlogin', NULL ,$time, '$newmessage')");
				 	}
		};
	}
	//Click to logout 
	if (isset($_POST['logout'])) {
				
				header('Location: http://localhost:8881/Chat-Box%20Default/index.php');
					queryMysql("UPDATE member SET status=0 WHERE user='$userlogin'");
				destroy_session();

}






?>