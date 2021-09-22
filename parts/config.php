<?php 

	$db_host = "localhost";
	$db_name = "darktales";
	$db_user = "Daniel";
	$db_pass = "W*CoIko/qcBC/K6k";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if(mysqli_connect_error()) {
		echo mysqli_connect_error();
		exit();
	}
?>