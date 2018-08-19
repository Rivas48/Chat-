<?php 

	
	$error = $user = $pass = $email = "";

			$user  = sanitizeString($_POST['user']);
			$pass  = sanitizeString($_POST['pass']);
			$email = sanitizeString($_POST['email']);
			$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

		if (isset($_POST['submitsignup'])){

			
		if (isset($_POST['user'])) {
			if ( $user == "" || $pass == "" || $email == "")
				$signuperror = "<p class='error'>Not all fields have been filled out</p>";
			else
			{ 
				$result = queryMysql("SELECT user,email FROM member WHERE user = '$user' AND email = '$email'");
				if ($result->num_rows){
					$signuperror = "<p class='error'>username/email already exists</p>";

					$error = $pass_hash; 
				}else 
				{
					queryMysql("INSERT INTO member VALUES('$user','$email','$pass_hash', '0')");
					//queryMysql("SELECT * FROM `member` where user='Rivas48'union");
					var_dump($pass_hash);
					header('Location: http://localhost:8881/Chat/alterlogin.php');

				}
			}
			
		}
		
	}




			


			