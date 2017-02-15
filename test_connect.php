<?php 
	$servername=getenv('DATABASE_SERVER_NAME');
	$databaseName=getenv('DATABASE_NAME');
	$tableName=getenv('DATABASE_TABLE_1');
	$username=getenv('DATABASE_USERNAME');
	$password=getenv('DATABASE_PASSWORD');

	//create connection
	$conn=mysqli_connect($servername,$username,$password,$databaseName);

	//check connection
	if (!$conn){
		die('test_connect Connection failed:'.mysqli_connect_error());
	}
	else{
		echo "test_connect: Connection Successful <br>";
	}
	echo "tes_connect ended";
 ?>