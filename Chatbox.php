<?php
	session_start();
	require_once 'functions.php';
	require_once 'checkuser.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='css/style.css'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
				<div id='container' class='container'>
		<div id='background' class='background'>
			<div id='topbar' class='topbar'>
			<a id='volume'  href='#'>
          	<span class='glyphicon glyphicon-volume-up volume'></span></a>

			<!-- Rounded switch -->
			<label class='switch'>
			  <input type='checkbox'>
			  <span class='slider round'></span>
			</label>

			
			

			<div id='mini' class='mini'>
			<a id='envelopeicon' href='#'><span class='glyphicon glyphicon-envelope'></span></a>
			<a id='messagesicon' href='#'><span class='glyphicon glyphicon-user'></span></a>
			<a id='optionsicon' href='#'><span class='glyphicon glyphicon-hdd'></span></a>
			</div>

			<div id='right' class='right'>
			<a id='shrink'  href='#'><span id='small' class='glyphicon glyphicon-minus-sign	
			'></span></a>
			<a id='growth' class='none' href='#'><span id='big' class='glyphicon glyphicon-plus-sign 
			'></span></a>
			
			</div>


	        
			</div>	



	


	<div id='main' class='main'>


		<div id='conversation' class='conversation'>
						<div id='messages' class='messages'>
							<!--	<span class='glyphicon glyphicon-triangle-top'></span>
						<p class='Loading'>LOAD OLDER MESSAGES</p><hr> -->
			</div>
			</div>
				<div id='input' class='input'>
				<form id="post" action="Chatbox.php" method="post">
				<input id='pm' type='text' name='message' value=''>
				<input type='submit' value='submit' name='submitMessage'>
				<a href="#"><input type='submit' value='logout' name='logout'></a>
				</form>

				</div>

			</div>
			<div class='online-menu' id='online'>
				
			</div>
			<div id='settings'>
					<div class='field'>
					<div class='option'>
						<!-- <div class='group'>
						<label class='settingLabel'>Show Photos Content</label>
						<label class="click">
			 			<input type="checkbox">
			  			<span class="slider round"></span>
						</label> 
						</div> 
						<hr> -->
						<div class='group'>
						<label class='settingLabel'>Font Style</label>
						<select id='font-style' class='font-style' name="font-family">
						  <option class='colorPattern' value="Georgia">Georgia</option>
						  <option class='colorPattern' value="Palatino">Palatino</option>
						  <option class='colorPattern' value="Times">Times</option>
						  <option class='colorPattern' value="Helvetica">Helvetica</option>
						 </select>
						</div>
						<hr>
						<div class='group'>
						<label class='settingLabel' >Color Pattern</label>
						<select id='color-style' class='color-style' name="font-family">
						  <option class='colorPattern' value="Generic">Generic</option>
						  <option class='colorPattern' value="Future">Future</option>
						  <option class='colorPattern' value="Bright">Bright</option>
						  <option class='colorPattern' value="Dark">Dark</option>
						 </select>
						</div>
						<hr>
					</div>
					</div>
				</div>
			</div>

</body>
<script src='jquery.js'></script>
<script src='auto_chat.js'></script>
<script>
		//Selecting Sections

	const chatbox             = document.getElementById('container');
	const interfaceSection    = document.getElementById('main');
	const conversationSection = document.getElementById('conversation');
	const peopleSection       = document.getElementById('people');
	const topBarSection       = document.getElementById('topbar');
	const backgroundSection   = document.getElementById('background');
	const settingSection      = document.getElementById('settings');
	const onlineSection      = document.getElementById('online');
	const fontStyle 		  =	document.getElementById('font-style');
	const colorStyle          = document.getElementById('color-style');


		//Input Selections

	const pm 				  = document.getElementById('pm');


		// Selecting Buttons

	var growthLink     		  = document.getElementById('growth');
	var shrinkLink			  = document.getElementById('shrink');
	var closeButton    		  = document.getElementsByClassName('glyphicon-remove-sign');
	var minimizeButton 		  = document.getElementById('size');
	var envelopeButton 		  = document.getElementById('envelopeicon');
	var messageButton  		  = document.getElementById('messagesicon');
	var settingButton  		  = document.getElementById('optionsicon');
	var volumeButton   		  = document.getElementsByClassName('glyphicon-volume-up');
	var toggleButton  		  = document.getElementsByClassName('slider'); 
	var plusButton   		  = document.getElementsByClassName('glyphicon-plus-sign');
	var volume = document.getElementById('volume');


		//Functions

	function addEvent(element, evnt, funct){
    if(element.attachEvent)
        return element.attach.Event('on'+evnt,funct);
    else
        return element.addEventListener(evnt,funct, false);
   }     

	function exitPage(){
		backgroundSection.style.visibility = "hidden";
		var createParagraph   = document.createElement('h1');
		var createText        = document.createTextNode('You have officially exited Chatbox!')
		createParagraph.appendChild(createText);
		chatbox.appendChild(createParagraph);
	}

	function volumeToggle(){

	}

	addEvent(volume, 'click',volumeToggle);

	function addFriends(){
		var createPerson 	  = document.createElement("div");
		var addPerson         = document.getElementById("people");
		var personImage       = document.createElement("img");
		addPerson.appendChild(createPerson);
		var personContainer   = document.createElement('div');
		var personName        = document.createElement('h2');
		var personTitle       = document.createElement('p');
		personTitle.className     = 'job';
		createPerson.className    = "person";
		personContainer.className = "person_name";
		personName.className      = "name";
		personContainer.appendChild(personName);
		personContainer.appendChild(personTitle);
		createPerson.appendChild(personImage);
		createPerson.appendChild(personContainer);
		
	}

	function minimizePage(){
		interfaceSection.style.display  = 'none';
		onlineSection.style.display  = 'none';
		settingSection.style.display  = 'none';
		backgroundSection.style.background = 'white';
		topbar.style.position              = 'absolute';
		topbar.style.bottom                = '0px';
		topbar.style.width                 = '100%';
		topbar.style.left                  = '0px' ;
		shrinkLink.style.display 	   = 'none';         
		growthLink.style.display  	   = 'block';
		growthLink.className  	   = '';		

	}

	addEvent(shrinkLink, 'click', minimizePage);

	function maximizePage(){ 
		interfaceSection.style.display  = 'flex';
		onlineSection.style.display  = 'none';
		settingSection.style.display  = 'none';
		interfaceSection.style.visibility  = '';
		backgroundSection.style.background = '';
		topbar.style.position = '';
		topbar.style.bottom = '';
		shrinkLink.style.display 	   = 'block';         
		growthLink.style.display  	   = 'none';
	}

	addEvent(growthLink, 'click', maximizePage);



	function loadChatbox(){
		interfaceSection.style.display = 'inline-flex';
		envelopeButton.classList.add('interfaceOn');
		onlineSection.style.display   = '';
		messageButton.classList.remove('interfaceOn');
		settingSection.style.display   = 'none';
		settingButton.classList.remove('interfaceOn');
		topbar.style.position = '';
		topbar.style.bottom = '';
		shrinkLink.style.display 	   = 'block';         
		growthLink.style.display  	   = 'none';
		envelopeButton.style.color = '#337ab7';
	}

	addEvent(envelopeButton, 'click', loadChatbox);

	function loadOnlineList(){
		onlineSection.style.display      = 'inline-flex';
		messageButton.classList.add('interfaceOn');
		interfaceSection.style.display    = 'none';
		envelopeButton.classList.remove('interfaceOn');
		settingSection.style.display      = 'none';
		settingButton.classList.remove('interfaceOn');
		topbar.style.position = '';
		topbar.style.bottom = '';
		shrinkLink.style.display 	   = 'block';         
		growthLink.style.display  	   = 'none';
		messageButton.style.color = '#337ab7';
	}

	addEvent(messageButton, 'click', loadOnlineList);

	function loadSetting(){
		settingSection.style.display       = 'flex';
		settingButton.classList.add('interfaceOn');
		interfaceSection.style.display     = 'none';
		envelopeButton.classList.remove('interfaceOn');
		onlineSection.style.display       = 'none';
		messageButton.classList.remove('interfaceOn');
		backgroundSection.style.background = 'rgb(208,210,216)';
		topbar.style.position = '';
		topbar.style.bottom = '';
		shrinkLink.style.display 	   = 'block';         
		growthLink.style.display  	   = 'none';
		settingButton.style.color = '#337ab7';
	}

	addEvent(optionsicon, 'click', loadSetting);

	function validateMessage(){
		/*
		if(pm != ""){
			
		}else
		alert('You did not write a message.')
		*/
	}

	function changeFont(){

		if(fontStyle.value == "Georgia" ){
		chatbox.className = "";
		chatbox.classList.add('georgia', 'container');
		console.log(fontStyle.value);
		} else if (fontStyle.value == "Palatino" ){
		chatbox.className = "";
		chatbox.classList.add('palatino', 'container');
		} else if (fontStyle.value == "Helvetica" ){
		chatbox.className = "";
		chatbox.classList.add('helvetica', 'container');
		} else if (fontStyle.value == "Times" ){
		chatbox.className = "";
		chatbox.classList.add('times', 'container');
	}
	}

	addEvent(fontStyle, 'change', changeFont);
	/*
	function stillHere(){
		logOutModal.style.display = 'none';
		logOutModal.style.zIndex  = '-10';
		setTimeout(function(){ 
			logOutModal.style.display = '';
			logOutModal.style.zIndex  = '';
		}, 1800000);
	}

	function iAmGone(){
		<?php
		/*
			if (isset($_POST['logout'])) {
				
			header('Location: http://localhost:8881/Chat-Box%20Default/index.php');
			queryMysql("UPDATE member SET status=0 WHERE user='$userlogin'");
			destroy_session();
		
			}
		*/
		?>
	}

*/

	setTimeout(function(){ 
		logOutModal.style.display = "";
		logOutModal.style.zIndex  = "";
	}, 1800000);
		

	function colorPatternsDisplay(){
		 if(colorStyle.value == 'Generic' ){
		backgroundSection.style.background = 'brown';
		console.log('brown');
}

		if (colorStyle.value == 'Future'){
		backgroundSection.style.background = 'green';
}

		if (colorStyle.value == 'Bright'){
		backgroundSection.style.background = 'pink';
}

		if (colorStyle.value == 'Dark'){
		backgroundSection.style.background = 'purple';
}
		
		
	}

	addEvent(colorStyle, 'change', colorPatternsDisplay);



</script>

</html>
