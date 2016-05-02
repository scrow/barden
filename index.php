<html>
	<head>
		<title>Reid Barden Pant/Shoe Status</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">		
	</head>
	<body>
		<div class="container">
			<div class="row text-xs-center">
				<h1 class="display-4">Today, Reid is...</h1>

				<?php
					if(file_exists('pants.flg')) {
						echo('<p class="lead text-danger"> wearing pants! </p>');
					} else {
						echo('<p class="lead text-success"> wearing shorts! </p>');
					};
				?>
		
					<p> and </p>
		
				<?php
					if(file_exists('shoes.flg')) {
						echo('<p class="lead text-danger"> wearing shoes! </p>');
					} else {
					        echo('<p class="lead text-success"> wearing flipflops! </p>');
					};
				?>
		
				<hr/>
		
				<p>Refresh for latest update!</p>
				
				<a class="btn btn-success-outline" href="http://reidbarden.com"> Visit My Website </a>
				
				<a class="btn btn-secondary-outline" href="json.php"> JSON status </a>
				
			</div>
		</div>
	</body>
</html>
