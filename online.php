<?php
	require_once 'functions.php';
	session_start();

		//Select all online users and put them in a Array 

		$onlineUser = queryMysql("SELECT user FROM member WHERE status=1");

		
		$onlineUserArray = array();
		while($rowOnlineUser = $onlineUser->fetch_array(MYSQLI_NUM))
		{
			array_push($onlineUserArray, $rowOnlineUser[0]);
			
		};



		$offlineUser = queryMysql("SELECT user FROM member WHERE status=0");

		$offlineUserArray = array();
		while($rowOfflineUser = $offlineUser->fetch_array(MYSQLI_NUM))
		{
			array_push($offlineUserArray, $rowOfflineUser[0]);
			
		};


		//Output the code of each online user and offline user to the list
	echo "<div class='list'><ul id='online-list' class='online-list'>";
	foreach ($onlineUserArray as $onlineUser) {

			echo "<li class='online'>".$onlineUser."</li><br>";
			
		}
	foreach ($offlineUserArray as $offlineUser) {
			echo "<li class='offline'>".$offlineUser."</li><br>";
		}
	
		echo "</ul></div>";
		

		
?>