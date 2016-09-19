<?php
	$type = $_POST['first4'];
	
	for($i=0;$i<1000000;$i++){
		$g = "s";
	}
	if($type == "1234"){
		echo "VISA";
	}
	else if($type == "5678"){
		echo "MAESTRO";
	}
	else{
		echo "MASTERCARD";
	}
?>