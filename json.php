<?php
	
	header('Content-Type: application/json');
	
	$values = array("name"=>"Reid Barden");
	
	if(file_exists('pants.flg')) {
		$values["pants"] = "yes";
	} else {
		$values["pants"] = "no";
	};
	
	if(file_exists('shoes.flg')) {
		$values["shoes"] = "yes";
	} else {
		$values["shoes"] = "no";
	};
	
	echo json_encode($values);
	
?>