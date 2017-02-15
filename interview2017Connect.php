<?php 
echo "interview2017 connect";
	$servername=getenv('DATABASE_SERVER_NAME');
	$databaseName=getenv('DATABASE_NAME');
	$tableName=getenv('DATABASE_TABLE_2');
	$username=getenv('DATABASE_USERNAME');
	$password=getenv('DATABASE_PASSWORD');

	//create connection
	$conn=mysqli_connect($servername,$username,$password,$databaseName);

	//check connection
	if (!$conn){
		die('interview2017 Connection failed:'.mysqli_connect_error());
	}
	else{
		echo "interview2017: Connection Successful <br>";
	}
 ?>
