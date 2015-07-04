<html>
	<head>
		<title>Toggle ReidBarden.com Should Status</title>
	</head>
	<body>
		<?php
		
		if(file_exists('should.flg')) {
			unlink('should.flg');
			echo('<p>Status set to SHORTS</p>');
		} else {
			touch('should.flg');
			echo('<p>Status set to PANTS</p>');
		};
		
		?>
		
		<p><a href="index.php">Go to the homepage</a> or <a href="toggleshould.php">toggle again</a>.</p>
		
	</body>
</html>
