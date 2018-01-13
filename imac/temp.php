<?php 

	$servername=getenv('PostGRE_DB_Host');
	$databaseName=getenv('PostGRE_DB');
	$username=getenv('PostGRE_DB_User');
	$password=getenv('PostGRE_DB_Password');
	$tableName_interviews = getenv('PostGRE_DB_IMac_intr');

	// $servername="localhost";
	// $databaseName="imac";
	// $tableName;
	// $username="root";
	// $password="";

	//create connection
	$dbconn = pg_connect("host=$servername dbname=$databaseName user=$username password=$password");
	if (!$dbconn){
		echo ('Could not connect: ' . pg_last_error().'<br>');
		echo pg_result_error($dbconn);
	}else{
		$query="INSERT INTO $tableName_interviews (Name,Year,Branch,Email,Mobile) VALUES ('Abhishek Jain','BE','CMPN','ajj.2396@gmail.com','9833377552')";
		$result = pg_query($dbconn,$query);
		if ($result){
			echo "Yayy!";
		}
		else{
			echo "Oops!!";
		}
	}
	?>