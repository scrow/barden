<?php 
	if(isset($_POST['submit'])){
		if(isset($_POST['password'])) {
			if($_POST['password'] == 'password') {
				switch($_POST['pants']) {
					case 'yes':
						touch('pants.flg');
						$status[] = 'Pants Yes';
						break;
					case 'no':
						unlink('pants.flg');
						$status[] = 'Pants No';
						break;
				}
				switch($_POST['shoes']) {
					case 'yes':
						touch('shoes.flg');
						$status[] = 'Shoes Yes';
						break;
					case 'no':
						unlink('shoes.flg');
						$status[] = 'Shoes No';
						break;
				}
			} else {
				$status[] = 'Incorrect Password';
			}
		} else {
			$status[] = 'No Password';
		}
	}
?>

<html>
	<head>
		<title>Toggle Reid Barden Pant/Shoe Status</title>
	</head>
	<body>
		
		<?php 
			
			if(isset($status)){
				print_r($status);
			}
			
		?>

		<form method="post">
			<label> Pants <input type="radio" name="pants" value="yes" required> Yes </input> <input type="radio" name="pants" value="no"> No </input> </label>
			<br>
			<label> Shoes <input type="radio" name="shoes" value="yes" required> Yes </input> <input type="radio" name="shoes" value="no"> No </input> </label>
			<br>
			<label> Password <input type="password" name="password" required> </label>
			<br>
			<input type="submit">
		</form>
		
		<p><a href="index.php">Go to the homepage</a> or <a href="toggle.php">toggle again</a>.</p>

	</body>
</html>
