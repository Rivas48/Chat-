<?php
	$error = $userlogin = $passlogin = "";


	//Check if one of the submit buttons were clicked

	if (isset($_POST['submitlogin']) || isset($_POST['onsubmitlogin'])) {

		//Store Variables
		$userlogin = $_POST['userlogin'];
		$passlogin = $_POST['passlogin'];

	if (isset($userlogin) && isset($passlogin) )
	{
		if ($userlogin == "" && $passlogin == ""){
			//Send To Login Screen
				header('Location: http://localhost:8881/Chat-Box%20Default/alterlogin.php');

				//Error Check
				$error = "<span class='error'> No email/password written.</span>";
				//Store Check
				$_SESSION['error'] = $error;
		}else
		{
			//Query checks if there is a match between input and database 

			$result = queryMysql("SELECT user,pass FROM member WHERE user='$userlogin' AND pass='$passlogin' ");


			if ($result->num_rows == 0)
			{
				//Error Check
				$error = "<span class='error'> Invalid email/password identification</span>";
				//Store Check
				$_SESSION['error'] = $error;
					header('Location: http://localhost:8881/Chat-Box%20Default/alterlogin.php');


			}
			else {
				//Query sets Status=1 to identify online.
			queryMysql("UPDATE member SET status=1 WHERE user='$userlogin'");
			$_SESSION['userlogin'] = $userlogin;
			$_SESSION['passlogin'] = $passlogin;
			header('Location: http://localhost:8881/Chat-Box%20Default/chatbox.php');
				 }
		}
	}
}
	




?>
