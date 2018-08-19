<?php 

	session_start();

	if ($_SESSION['userlogin']) {
		$_SESSION['userlogin'] = "";

	}
	$_SESSION['userlogin'] = "";
	$appname = 'Chatbox';
	//redirects page back to the chatbox if user is set 
	require_once 'redirect.php';
	//deals with signing up user when form is submitted
	require_once 'SignUpForm.php';
	//deals with logging in when form is submitted
	require_once 'login.php';

?>

	<!DOCTYPE html>
	<html>
	<head>
	<meta charset='UTF-8'> 
	<!--- Bootstrap CDN CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel='stylesheet' type='text/css' href='home.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome To Chatbox</title>
	</head> 
	<body class='d-flex w-100'> 	
		<!--- Banner -->
		<div class='cover-container mw-100 mh-100 '>
			<div class='banner masthead  mw-100 mh-100 '> 
				<div class='banner_color masthead  mw-100 mh-100 '>
				<div class='row d-flex justify-content-around mh-100 mw-100'>
				<!--- Logo -->

				<div class='col-4'> 
					<h1 class='mt-3 ml-5'><?php echo $appname;?></h1>
				</div> 
				<!--- Login -->
				<div class='col-8 '> 
					<!---Form -->
					<form method='post' action='index.php' class='ml-5 pl-5 d-inline-flex'> 
						<label class="form mr-2 ml-2">Username</label>
						<!--- User Login Input -->
						<input type='text' name='userlogin' value=''required>
						<label class="form mr-2 ml-2">Password</label>
						<!--- Password Login Input -->
						<input type='password' name='passlogin' value=''required>
						<!--- submitlogin Input -->
						<input type='submit' value='submit' name='submitlogin'>
					</form>
				</div> 
				</div>
				</div>
			</div>
			<!--- Sign Up Banner -->
			<div class='signupbanner'> 
				<div class='background'>
				<!--- Column Holder -->
				<div class='row justify-content-around'>
				<!--- Left Side Description -->
				<div class=' welcome col-sm-5 ml-1 mb-4'>
					<h1 class='welcome'>Welcome to <?php echo $appname ?></h1>
					<p class='welcome_text'>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
					</p>
				</div>		 
				<!--- Right Side SignUp Form -->
				<div class='col-sm-6'>
					<form class='signup' action='index.php' method='post'>
					<h1>Create a New Account</h1>
					<p class='formtext'>Connect with Us today</p>
					<?php echo $signuperror; echo $error; ?>
					<label>Username</label>
					<!--- User Sign Up Input -->
					<input type='text' id='user' name='user' required>
					<label>Password</label>
					<!--- Password Sign Up Input -->
					<input type='password' name='pass' required>
					<label>Email Address</label>
					<!--- Email Sign Up Input -->
					<input type='text' name='email' required>
					<!--- Submit Sign Up Input -->
					<input class='submit' type='submit' name="submitsignup">
				</form>
				</div>
				</div>
				</div>		
			</div>
		</div>	
		</body>
</html>


		



	