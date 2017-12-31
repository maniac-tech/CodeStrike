<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php

	//----- PostGRE SQL Commands -----	
	$sql="";
	$result="";
	$sql = "SELECT Count(\"Branch\"") FROM $tablename_IMac WHERE Branch='CMPN' ";
	$resultCMPN = pg_query($dbconn, $sql);
	$countCMPN = $resultCMPN;
	// echo "$countCMPN";

	$sql = "SELECT Count(Branch) FROM $tablename_IMac WHERE Branch='IT' ";
	$result = pg_query($dbconn, $sql);
	$countIT = $result;

	$sql = "SELECT Count(Branch) FROM $tablename_IMac WHERE Branch='EXTC' ";
	$result = pg_query($dbconn, $sql);
	$countEXTC = $result;

	$sql = "SELECT Count(Branch) FROM $tablename_IMac WHERE Branch='ELEC' ";
	$result = pg_query($dbconn, $sql);
	$countELEC = $result;

	$sql = "SELECT Count(Branch) FROM $tablename_IMac WHERE Branch='ELEX' ";
	$result = pg_query($dbconn, $sql);
	$countELEX = $result;

	$sql = "SELECT  Count(Year) FROM $tablename_IMac WHERE Year='BE' ";
	$result = mysqli_query($conn,$sql);
	$countBE = $result;

	$sql = "SELECT  Count(Year) FROM $tablename_IMac WHERE Year='TE' ";
	$result = mysqli_query($conn,$sql);
	$countTE = $result;

	$sql = "SELECT  Count(Year) FROM $tablename_IMac WHERE Year='SE' ";
	$result = mysqli_query($conn,$sql);
	$countSE = $result;	
	// -X-X-X- End of PostGRE SQL Commands -X-X-X-

	//----- SQL Commands -----
	/*
	$sql="";
	$result="";
	$sql = "SELECT * FROM $tableName WHERE Branch='CMPN' ";
	$result = mysqli_query($conn,$sql);
	$countCMPN = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Branch='INFT' ";
	$result = mysqli_query($conn,$sql);
	$countIT = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Branch='EXTC' ";
	$result = mysqli_query($conn,$sql);
	$countEXTC = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Branch='ELEX' ";
	$result = mysqli_query($conn,$sql);
	$countELEC = mysqli_num_rows($result);	

	$sql = "SELECT * FROM $tableName WHERE Branch='ELEC' ";
	$result = mysqli_query($conn,$sql);
	$countELEX = mysqli_num_rows($result);	

	$sql = "SELECT * FROM $tableName WHERE Year='BE' ";
	$result = mysqli_query($conn,$sql);
	$countBE = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Year='TE' ";
	$result = mysqli_query($conn,$sql);
	$countTE = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Year='SE' ";
	$result = mysqli_query($conn,$sql);
	$countSE = mysqli_num_rows($result);
	*/ 	
?>
<div id="overview_chart">
	Main chart goes here
</div>
<div id="piechart" >
	<p>
		<?php echo "CMPN:".$countCMPN."&&".$resultCMPN; ?>
		<?php echo "IT:".$countIT; ?>
		<?php echo "EXTC:".$countEXTC; ?>
		<?php echo "ELEC:".$countELEC; ?>
		<?php echo "ELEX:".$countELEX; ?>
		<br>
		SE:<?php echo $countSE; ?>
		TE:<?php echo $countTE; ?>
		BE:<?php echo $countBE; ?>
	</p>
</div>
<div id="chart_div"></div>