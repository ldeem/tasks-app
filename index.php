<?php
	
	$connection = mysqli_connect(
		'localhost',
		'root'
		'caramelo',
		'task-app'
	);

	if($connection){
		echo "Database is connected";
	}

?>