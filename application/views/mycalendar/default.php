<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='../fullcalendar.css' rel='stylesheet' />

<script src='../lib/moment.min.js'></script>
<script src='../lib/jquery.min.js'></script>
<script src='../fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
		var evnetsData = getuserEvents();
		$('#calendar').fullCalendar({
			defaultDate: '2016-06-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: 
				evnetsData
			
		});
	function getuserevents(){
		$.ajax({
		type: "POST",
        url: "<?php ?>",
        dataType: 'json',
        data: {name: user_name, pwd: password},
		});
		return result;
	}	
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'></div>

</body>
</html>
