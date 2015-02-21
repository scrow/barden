<html>
	<head>
		<title>Toggle ReidBarden.com Status</title>
	</head>
	<body>
		<?php
		
		if(file_exists('pants.flg')) {
			unlink('pants.flg');
			echo('<p>Status set to SHORTS</p>');
		} else {
			touch('pants.flg');
			echo('<p>Status set to PANTS</p>');
		};
		
		?>
		
		<p><a href="index.php">Go to the homepage</a> or <a href="toggle.php">toggle again</a>.</p>
		
	</body>
</html>
