<?php
	$error = $userlogin = $passlogin = "";

	//Check if one of the submit buttons were clicked

	if (isset($_POST['submitlogin']) || isset($_POST['onsubmitlogin'])) {

		//Store Variables
		$userlogin = sanitizeString($_POST['userlogin']);
		$passlogin = sanitizeString($_POST['passlogin']);

	if (isset($userlogin) && isset($passlogin) )
	{
		if ($userlogin == "" && $passlogin == ""){
			//Send To Login Screen
				header('Location: http://localhost:8881/Chat/alterlogin.php');
				//Error Check
				$signinerror = "Missing Email and Password Fields";
				//Store Check
				$_SESSION['error'] = $error;
		}else
		{
		//Query checks if there is a match between input and database 

			$result = queryMysql("SELECT user,pass FROM member WHERE user='$userlogin'");
			$hash = $result->fetch_array(MYSQLI_NUM)[1];


			if (password_verify($passlogin, $hash))
			{
			//Query sets Status=1 to identify online.

				queryMysql("UPDATE member SET status=1 WHERE user='$userlogin'");
				$_SESSION['userlogin'] = $userlogin;
				header('Location: http://localhost:8881/Chat/chatbox.php');
			}else {
			//Error Check
				$error = "<span class='error'> Invalid email/password identification</span>";
			//Store Check
				
				$_SESSION['error'] = $error;
					header('Location: http://localhost:8881/Chat/alterlogin.php');
				
				 }
		}
	}
}

?>

