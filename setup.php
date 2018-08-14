<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Setting up...</h3>


<?php 
	require_once 'functions.php';

	//Usually create just by inside mysql but to show you the queries you would use and I used

	//Create Tables for members & messages
	createTable('member',
				'user VARCHAR(16),
				 email VARCHAR(32),
				 pass VARCHAR(16),
				 online TINYINT UNSIGNED,
				 index(email(16)),
				 index(online(1))'
			    );


	createTable('messages',
				'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				 auth VARCHAR(16),
				 recip VARCHAR(16),
				 time INT UNSIGNED,
				 message VARCHAR(4096),
				 INDEX(auth(8)),
				 INDEX(recip(6))'
				);



	echo header('Location:http://localhost:8881/Chat-Box%20Default/');exit;
	
?>

<br> Done
</body>
</html>