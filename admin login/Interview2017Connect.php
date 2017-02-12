<?php 
	$servername=getenv('DATABASE_SERVER_NAME');
	$username=getenv('DATABASE_USERNAME');
	$password=getenv('DATABASE_PASSWORD');
	$databaseName=getenv('DATABASE_NAME');
	$tableName=getenv('DATABASE_TABLE_2');

	//create connection
	$conn=new mysqli($servername,$username,$password,$databaseName);

	//check connection
	if ($conn->connect_error){
		die('Connection failed:'.$conn->connect_error);
	}
	else
		echo "Connection - Exists <br>";
 ?>