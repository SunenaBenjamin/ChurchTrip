<!DOCTYPE HTML>
<html>
	<meta id="view" name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/my_countdown.css">

	<title> Countdown </title>

	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.plugin.min.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
	

	<script type="text/javascript">
		
		$(document).ready(function(){
			
			$('.my-countdown').countdown({
				until: $.countdown.UTCDate(-5,2015,8,7,0,0,0),
				format: 'ydhms'
			});
			
			
			
		});
		
	</script>
	

	<body>		
		
		<div id="timer">
			
			<div id="nav"><?php 
				echo file_get_contents("nav.txt");
			?></div>
			

			<div class="heading">
				<h2>Countdown to the next</h2>
				<h1>Wisconsin Trip</h1>
				<h2>labor day weekend</h2>
				
			</div>
			
			<div class="my-countdown">
						
			</div>
		</div>

 	</body>
 	
 	
 	
 	
</html>