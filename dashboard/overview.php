<?php

	//----- PostGRE SQL Commands -----	
$sql="";
$result="";
// 2017 Data
$sql = "SELECT * FROM $tablename_IMac WHERE \"Branch\"='CMPN' ";
$result = pg_query($dbconn, $sql);
$countCMPN_2017 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac WHERE \"Branch\"='IT' ";
$result = pg_query($dbconn, $sql);
$countIT_2017 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac WHERE \"Branch\"='EXTC' ";
$result = pg_query($dbconn, $sql);
$countEXTC_2017 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac WHERE \"Branch\"='ELEC' ";
$result = pg_query($dbconn, $sql);
$countELEC_2017 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac WHERE \"Branch\"='ELEX' ";
$result = pg_query($dbconn, $sql);
$countELEX_2017 = pg_num_rows($result);

$sql = "SELECT  * FROM $tablename_IMac WHERE \"Year\"='BE' ";
$result = pg_query($dbconn,$sql);
$countBE_2017 = pg_num_rows($result);

$sql = "SELECT  * FROM $tablename_IMac WHERE \"Year\"='TE' ";
$result = pg_query($dbconn,$sql);
$countTE_2017 = pg_num_rows($result);

$sql = "SELECT  * FROM $tablename_IMac WHERE \"Year\"='SE' ";
$result = pg_query($dbconn,$sql);
$countSE_2017 = pg_num_rows($result);	

// 2018 Data
$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Branch\"='CMPN' ";
$result = pg_query($dbconn, $sql);
$countCMPN_2018 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Branch\"='IT' ";
$result = pg_query($dbconn, $sql);
$countIT_2018 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Branch\"='EXTC' ";
$result = pg_query($dbconn, $sql);
$countEXTC_2018 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Branch\"='ELEC' ";
$result = pg_query($dbconn, $sql);
$countELEC_2018 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Branch\"='ELEX' ";
$result = pg_query($dbconn, $sql);
$countELEX_2018 = pg_num_rows($result);

$sql = "SELECT  * FROM $tablename_IMac_2018 WHERE \"Year\"='BE' ";
$result = pg_query($dbconn,$sql);
$countBE_2018 = pg_num_rows($result);

$sql = "SELECT  * FROM $tablename_IMac_2018 WHERE \"Year\"='TE' ";
$result = pg_query($dbconn,$sql);
$countTE_2018 = pg_num_rows($result);

$sql = "SELECT  * FROM $tablename_IMac_2018 WHERE \"Year\"='SE' ";
$result = pg_query($dbconn,$sql);
$countSE_2018 = pg_num_rows($result);	

$total_reg = $countIT_2018+$countCMPN_2018+$countELEX_2018+$countELEC_2018+$countEXTC_2018+$countIT_2017+$countCMPN_2017+$countELEX_2017+$countELEC_2017+$countEXTC_2017;

// 2017 Data:
$sql = "SELECT * FROM $tablename_IMac WHERE \"Status\"='PENDING' ";
$result = pg_query($dbconn, $sql);
$countPending_2017 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac WHERE \"Status\"='COMPLETED' ";
$result = pg_query($dbconn, $sql);
$countCompleted_2017 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac WHERE \"Status\"='NOT ATTENDED' ";
$result = pg_query($dbconn, $sql);
$countNA_2017 = pg_num_rows($result);

// 2018 Data:
$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Status\"='PENDING' ";
$result = pg_query($dbconn, $sql);
$countPending_2018 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Status\"='COMPLETED' ";
$result = pg_query($dbconn, $sql);
$countCompleted_2018 = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Status\"='NOT ATTENDED' ";
$result = pg_query($dbconn, $sql);
$countNA_2018 = pg_num_rows($result);
	// -X-X-X- End of PostGRE SQL Commands -X-X-X-

?>
<script>
	window.onload = function () {

		var chart = new CanvasJS.Chart("branch-wise", {
			animationEnabled: true,
			title:{
				text: "Branch-wise Data",
				horizontalAlign: "left"
			},
			data: [{
				type: "doughnut",
				startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
		{ y: <?php echo ($countCMPN_2018+$countCMPN_2017) ?>, label: "CMPN" },
		{ y: <?php echo ($countIT_2018+$countIT_2017) ?>, label: "INFT" },
		{ y: <?php echo ($countELEX_2018+$countELEX_2017) ?>, label: "ELEX" },
		{ y: <?php echo ($countELEC_2018+$countELEC_2017) ?>, label: "ELEC"},
		{ y: <?php echo ($countEXTC_2018+$countEXTC_2017) ?>, label: "EXTC"},
		]
	}]
});
		chart.render();

	}
</script>
<script src="js/canvasjs/canvasjs.min.js"></script>

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
			<p id="top_charts_val"><?php echo ($countCompleted_2018+$countCompleted_2017); ?></p>
			<br>
			<p id="top_charts_name">Completed</p>
		</center>
	</div>
	<div id="pending_reg">
		<center>
			<p id="top_charts_val"><?php echo ($countPending_2018+$countPending_2017); ?></p>
			<br>
			<p id="top_charts_name">Pending</p>
		</center>
	</div>
	<div id="notAttended_reg">
		<center>
			<p id="top_charts_val"><?php echo ($countNA_2018+$countNA_2017); ?></p>
			<br>
			<p id="top_charts_name">Not Attended</p>
		</center>
	</div>
</div>
<div id="bottom_charts">	
	<div id="branch-wise" ></div>
	<div id="batches-per-week"></div>
</div>
