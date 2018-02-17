<?php 

	$servername=getenv('PostGRE_DB_Host');
	$databaseName=getenv('PostGRE_DB');
	$username=getenv('PostGRE_DB_User');
	$password=getenv('PostGRE_DB_Password');
	$tableName_interviews = getenv('PostGRE_DB_IMac_intr');
	$tableName_imacTraining = getenv('PostGRE_DB_HackingWorkshop_2018');

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
		// echo "Connection Successful";
	}
	?>