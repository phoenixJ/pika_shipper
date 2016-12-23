<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pika_shipper";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	mysqli_query($conn,"SET NAMES 'UTF8'");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

?>