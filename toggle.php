<?php 
	
	if(isset($_POST['pyes'])){
		touch('pants.flg');
		$status = 'Pants Yes';
	}
	
	if(isset($_POST['pno'])){
		unlink('pants.flg');
		$status = 'Pants No';
	}
	
	if(isset($_POST['syes'])){
		touch('shoes.flg');
		$status = 'Shoes Yes';
	}	
	
	if(isset($_POST['sno'])){
		unlink('pants.flg');
		$status = 'Shoes No';
	}		
?>

<html>
	<head>
		<title>Toggle Reid Barden Pant/Shoe Status</title>
	</head>
	<body>
		
		<?php 
			
			if(isset($status)){
				echo "<p> $status </p>";
			}
			
		?>

		<form method="post">
			<label> Pants <button type="submit" name="pyes"> Yes </button> <button type="submit" name="pno"> No </button> </label>
			<label> Shoes <button type="submit" name="syes"> Yes </button> <button type="submit" name="sno"> No </button> </label>
		</form>
		
		<p><a href="index.php">Go to the homepage</a> or <a href="toggle.php">toggle again</a>.</p>

	</body>
</html>
