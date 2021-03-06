<?php

	$db = "App" ; 
	$hn = "localhost" ;
	$un = "username" ;
	$pw = "password" ;

	$conn = new mysqli($hn,$un, $pw, $db) ; 
	if ($conn->connect_error) die($conn->connect_error);

	// Function For Creating Tables 

	function createTable ($name, $query)
	{
		queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
		echo "Table '$name' created or already exists<br>"; 
	}

	//Function For Querying Mysql 

	function queryMysql($query)
	{
		global $conn;
		$result = $conn->query($query);
		if(!$result) die($conn->connect_error);
		return $result;
	}

	//Terminate Session

	function destroySession()
	{
		$_SESSION=array();
		if (session_id() != "" || isset($_COOKIE[session_name()]))
			setcookie(session_name(), '', time()-2592000, '/');

		session_destroy();
	}
	//Prevent Unwanted Characters

	function sanitizeString($var)
	{
		global $conn;
		$var = stripcslashes($var);
		$var = strip_tags($var);
		return $conn->real_escape_string($var);
	}

	//Extra Still Working On Including
	function showProfile($user)
	{
		if(file_exists("$user.jpg"))
			echo "<img src='$user.jpg' style='float:left'>";
		if($result->num_rows)
		{
			$row = $result->mysql_fetch_array(MYSQLI_ASSOC);
			echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
		}
	}
	
		$group = queryMysql("SELECT count(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name ='messages'");	
					
		$rows      = queryMysql("SELECT message from messages");
		$rowsArray = $rows->num_rows;

		$auth      = queryMysql("SELECT auth FROM messages");
		$authArray = array();
		while($rowAuth = $auth->fetch_array(MYSQLI_NUM))
		{
						
			array_push($authArray, $rowAuth[0]);
		};


		$time      = queryMysql("SELECT time FROM messages");
		$timeArray = array();
		while($rowTime = $time->fetch_array(MYSQLI_NUM))
		{
			array_push($timeArray, $rowTime[0]);
					
		};
		$time->fetch_array(MYSQLI_NUM);


		$mess      = queryMysql("SELECT message FROM messages");
		$messArray = array();
		while($rowMess = $mess->fetch_array(MYSQLI_NUM))
		{
			array_push($messArray, $rowMess[0]);
			
		};



?>