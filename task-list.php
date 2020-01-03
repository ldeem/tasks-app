<?php
	include('database.php');

	$query = "SELECT * from task";
	$result = mysqli_query($connection, $query);

	if(!$result){
		die('Query failed'. mysqli_error($connection));
	}

	$json = array();
	//fila por cada dato que obtengo de la base de datos
	while($row = mysqli_fetch_array($result)){
		$json[] = array(
			'name' => $row['name'],
			'description' => $row['description'],
			'id' => $row['id']
		);
	}
	//codificar
	$jsonstring = json_encode($json);
	echo $jsonstring;
?>