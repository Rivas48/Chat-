<?php 

	
	$error = $user = $pass = $email = "";

		if(isset($_SESSION['user'])) 

		if (isset($_POST['user'])) {
			$user  = sanitizeString($_POST['user']);
			$pass  = sanitizeString($_POST['pass']);
			$email = sanitizeString($_POST['email']);

			if ( $user == "" || $pass == "" || $email == "")
				$error = "Not all fields have been filled out";
			else
			{ 
				$result = queryMysql("SELECT user,email FROM member WHERE user = '$user' AND email = '$email'");
				if ($result->num_rows){
					$error = "that username/email already exists"; 
					$button = "<input class='submit' type='submit'>" ;

				}else 
				{
					queryMysql("INSERT INTO member VALUES('$user','$email','$pass')");
					//queryMysql("SELECT * FROM `member` where user='Rivas48'union");
					header('Location: http://localhost:8881/Chat-Box%20Default/chatbox.php');

				}
			}
		}

	
	 echo <<<_END

	
		
_END;
		
		if($result->num_rows){
			echo "
			" ;
		}else {
			echo "
			" ;
		};
	 
?>

			