<?php
// Connecting, selecting database
$servername=getenv('PostGRE_DB_Host');
$databaseName=getenv('PostGRE_DB');
$username=getenv('PostGRE_DB_User');
$password=getenv('PostGRE_DB_Password');
$tableName=getenv('PostGRE_DB_Users');
$tablename_IMac=getenv('PostGRE_DB_IMac');
$tablename_IMac_Coord=getenv('PostGRE_DB_IMac_Co');
$tableName_IMac_interviews = getenv('PostGRE_DB_IMac_intr');
$tablename_IMac_2018 = getenv('PostGRE_DB_IMac_2018');
$tablename_JS_2018 = getenv('PostGRE_DB_JavascriptWorkshop_2018');
$tablename_Hacking_2018 = getenv('PostGRE_DB_HackingWorkshop_2018');

// $servername="localhost";
// $databaseName="dashboard";
// $username="postgres";
// $password="root";
// $tableName="dashboard_users";
// $tablename_IMac="imac2017_registrations";
// $tablename_IMac_Coord="imac2017_coordinators";
// $tableName_IMac_interviews = "imac2018_interviews";
// $tablename_IMac_2018 = "imac2018_registrations_even";
// $tablename_JS_2018 = getenv('PostGRE_DB_JavascriptWorkshop_2018');
// $tablename_Hacking_2018 = getenv('PostGRE_DB_HackingWorkshop_2018');

$dbconn = pg_connect("host=$servername dbname=$databaseName user=$username password=$password");
if (!$dbconn){
	echo ('Could not connect: ' . pg_last_error().'<br>');
	echo pg_result_error($dbconn);
}

?>
