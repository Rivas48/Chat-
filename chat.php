<?php
require_once 'functions.php';

	for ($i=0; $i < $rowsArray ; $i++) { 
		echo "					
			<div class='chat_message'>
			<img src=''>
			<p class='time'>".$timeArray[$i]."</p>
			<p class='time'>".$authArray[$i].":</p>
			<p class='text'>".$messArray[$i]."</p>
			</div>		
			";
		$newmessage = "";
	}

?>