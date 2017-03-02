<?php 

	//MYSQLI OBJECT ORIENTED USED:
	// 
	$servername=getenv('DATABASE_SERVER_NAME');
	$databaseName=getenv('DATABASE_NAME');
	$tableName=getenv('DATABASE_TABLE_MEMBERS');
	$username=getenv('DATABASE_USERNAME');
	$password=getenv('DATABASE_PASSWORD');

	//create connection
	$conn= new mysqli($servername,$username,$password,$databaseName);

	//check connection
	if (mysqli_connect_error()){
		die('Connection failed:'.mysqli_connect_error());
	}
	else
		echo "Connection Successful";
	
 ?>