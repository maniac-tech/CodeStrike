<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php

	//----- PostGRE SQL Commands -----	
	$sql="";
	$result="";
	$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Branch\"='CMPN' ";
	$result = pg_query($dbconn, $sql);
	$countCMPN = pg_num_rows($result);
	// echo "$countCMPN";

	$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Branch\"='IT' ";
	$result = pg_query($dbconn, $sql);
	$countIT = pg_num_rows($result);

	$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Branch\"='EXTC' ";
	$result = pg_query($dbconn, $sql);
	$countEXTC = pg_num_rows($result);

	$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Branch\"='ELEC' ";
	$result = pg_query($dbconn, $sql);
	$countELEC = pg_num_rows($result);

	$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Branch\"='ELEX' ";
	$result = pg_query($dbconn, $sql);
	$countELEX = pg_num_rows($result);

	$sql = "SELECT  * FROM $tablename_IMac_2018 WHERE \"Year\"='BE' ";
	$result = pg_query($dbconn,$sql);
	$countBE = pg_num_rows($result);

	$sql = "SELECT  * FROM $tablename_IMac_2018 WHERE \"Year\"='TE' ";
	$result = pg_query($dbconn,$sql);
	$countTE = pg_num_rows($result);

	$sql = "SELECT  * FROM $tablename_IMac_2018 WHERE \"Year\"='SE' ";
	$result = pg_query($dbconn,$sql);
	$countSE = pg_num_rows($result);	

	$total_reg = $countIT+$countCMPN+$countELEX+$countELEC+$countEXTC;


	$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Status\"='PENDING' ";
	$result = pg_query($dbconn, $sql);
	$countPending = pg_num_rows($result);

	$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Status\"='COMPLETED' ";
	$result = pg_query($dbconn, $sql);
	$countCompleted = pg_num_rows($result);
	// -X-X-X- End of PostGRE SQL Commands -X-X-X-

?>
<div id="top_charts">
	<div id="total_reg">
		<center>		
			<p id="top_charts_val"><?php echo $total_reg; ?></p>
			<br>
			<p id="top_charts_name">Total Registered</p>
		</center>
	</div>
	<div id="complete_reg">
		<center>
		<p id="top_charts_val"><?php echo $countCompleted; ?></p>
		<br>
		<p id="top_charts_name">Completed Students</p>
	</center>
	</div>
	<div id="pending_reg">
		<center>
		<p id="top_charts_val"><?php echo $countPending; ?></p>
		<br>
		<p id="top_charts_name">Pending Students</p>
	</center>
	</div>
</div>
<div id="bottom_charts">	
	<div id="branch-wise" ></div>
	<div id="batches-per-week"></div>
</div>
