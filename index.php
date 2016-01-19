<html>
	<head>
		<title>Reid Barden Pant/Shoe Status</title>
		<style>
			p {
				font-family: serif
			}

			p.heading {
				font-size: 32px;
				font-weight: bold;
				text-align: center;
				margin-top: 100px
			}

			p.status {
				font-size: 24px;
				font-weight: bold;
				text-align: center;
				font-style: italic;
				margin-bottom: 100px
			}

		</style>
	</head>
	<body>
		<p class="heading"/>Today, Reid is...</p>

		<?php
if(file_exists('pants.flg')) {
	echo('<p class="status">wearing pants!</p>');
} else {
	echo('<p class="status">wearing shorts!</p>');
};
		?>

		<p class="heading">Today, Reid should be...</p>

		<?php
if(file_exists('should.flg')) {
	echo('<p class="status">wearing pants!</p>');
} else {
	echo('<p class="status">wearing shorts!</p>');
};
		?>

		<hr/>

		<p>Refresh for latest update!</p>
	</body>
</html>
