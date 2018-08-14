
$(document).ready(function(){
	var interval = setInterval(function(){
		$.ajax({
			url: 'chat.php',
			success: function(data) {
				$('#messages').html(data);
			}
		});
	}, 1000);
});

$(document).ready(function(){
	var interval = setInterval(function(){
		$.ajax({
			url: 'online.php',
			success: function(data) {
				$('#online').html(data);
			}
		});
	}, 1000);
});



