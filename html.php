
<!--

//Still Working Out Some New Javascript Functions That I Can Implent Once I add the HTMl counterparts 

	</form>

	</div>

</body>
<script>
		//Selecting Sections

	const chatbox             = document.getElementById('container');
	const interfaceSection    = document.getElementById('main');
	const conversationSection = document.getElementById('conversation');
	const peopleSection       = document.getElementById('people');
	const topBarSection       = document.getElementById('topbar');
	const backgroundSection   = document.getElementById('background');
	const settingSection      = document.getElementById('settings');
	const messageSection      = document.getElementById('message');
	const fontStyle 		  =	document.getElementById('font-style');
	const colorStyle          = document.getElementById('color-style');


		//Input Selections

	const pm 				  = document.getElementById('pm');




		// Selecting Buttons
	var growthLink     		  = document.getElementById('growth');
	var closeButton    		  = document.getElementsByClassName('glyphicon-remove-sign');
	var minimizeButton 		  = document.getElementById('size');
	var envelopeButton 		  = document.getElementById('envelope');
	var messageButton  		  = document.getElementById('messages');
	var settingButton  		  = document.getElementById('options');
	var volumeButton   		  = document.getElementsByClassName('glyphicon-volume-up');
	var toggleButton  		  = document.getElementsByClassName('slider'); 
	var plusButton   		  = document.getElementsByClassName('glyphicon-plus-sign');


		//Functions 

	function exitPage(){
		backgroundSection.style.visibility = "hidden";
		var createParagraph   = document.createElement('h1');
		var createText        = document.createTextNode('You have officially exited Chatbox!')
		createParagraph.appendChild(createText);
		chatbox.appendChild(createParagraph);
	}

	function volumeToggle(){

	}

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
		interfaceSection.style.visibility  = 'hidden';
		backgroundSection.style.background = 'white';
		topbar.style.position              = 'absolute';
		topbar.style.bottom                = '0px';
		topbar.style.width                 = '100%';
		topbar.style.left                  = '0px' ;
		minimizeButton.classList.remove('glyphicon-minus-sign');
		minimizeButton.className           = 'glyphicon glyphicon-fullscreen';
		growthLink.setAttribute("onclick",'maximizePage()');
	}

	function maximizePage(){ 
		interfaceSection.style.visibility  = '';
		backgroundSection.style.background = '';
		topbar.style.position = '';
		topbar.style.bottom = '';
		minimizeButton.classList.remove('glyphicon-fullscreen');
		minimizeButton.className = 'glyphicon glyphicon-minus-sign';
		growthLink.setAttribute("onclick",'minimizePage()');

	}

	function loadChatbox(){
		interfaceSection.style.display = 'inline-flex';
		envelopeButton.classList.add('interfaceOn');
		messageSection.style.display   = 'none';
		messageButton.classList.remove('interfaceOn');
		settingSection.style.display   = 'none';
		settingButton.classList.remove('interfaceOn');
	}

	function loadMessage(){
		messageSection.style.display      = '';
		messageButton.classList.add('interfaceOn');
		interfaceSection.style.display    = 'none';
		envelopeButton.classList.remove('interfaceOn');
		settingSection.style.display      = 'none';
		settingButton.classList.remove('interfaceOn');

	}

	function loadSetting(){
		settingSection.style.display       = 'flex';
		settingButton.classList.add('interfaceOn');
		interfaceSection.style.display     = 'none';
		envelopeButton.classList.remove('interfaceOn');
		messageSection.style.display       = 'none';
		messageButton.classList.remove('interfaceOn');
		backgroundSection.style.background = 'rgb(208,210,216)';

	}

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

	function colorPatternsDisplay(){
				 if(fontStyle.value == Generic ){
		.className = "";
		.classList.add('generic');
}

		if (fontStyle.value == Future){
		.className = "";
		.classList.add('future');
}

		if (fontStyle.value == Bright){
		.className = "";
		.classList.add('bright');
}

		if (fontStyle.value == Dark){
		.className = "";
		.classList.add('dark');
}
		
		*/
	}
</script>
</html>