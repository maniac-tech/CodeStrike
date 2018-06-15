<?php
	require 'login_connect.php';
	//----- PostGRE SQL Commands -----	
$sql="";
$result="";
// 2017 Data
$sql = "SELECT * FROM $tablename_iMac WHERE \"Branch\"='CMPN' ";
$result = pg_query($dbconn, $sql);
$countCMPN = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_iMac WHERE \"Branch\"='IT' ";
$result = pg_query($dbconn, $sql);
$countIT = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_iMac WHERE \"Branch\"='EXTC' ";
$result = pg_query($dbconn, $sql);
$countEXTC = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_iMac WHERE \"Branch\"='ELEC' ";
$result = pg_query($dbconn, $sql);
$countELEC = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_iMac WHERE \"Branch\"='ELEX' ";
$result = pg_query($dbconn, $sql);
$countELEX = pg_num_rows($result);

$sql = "SELECT  * FROM $tablename_iMac WHERE \"Year\"='BE' ";
$result = pg_query($dbconn,$sql);
$countBE = pg_num_rows($result);

$sql = "SELECT  * FROM $tablename_iMac WHERE \"Year\"='TE' ";
$result = pg_query($dbconn,$sql);
$countTE = pg_num_rows($result);

$sql = "SELECT  * FROM $tablename_iMac WHERE \"Year\"='SE' ";
$result = pg_query($dbconn,$sql);
$countSE = pg_num_rows($result);	

$total_reg = $countIT+$countCMPN+$countELEX+$countELEC+$countEXTC;

$sql = "SELECT * FROM $tablename_iMac WHERE \"Status\"='PENDING' ";
$result = pg_query($dbconn, $sql);
$countPending = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_iMac WHERE \"Status\"='COMPLETED' ";
$result = pg_query($dbconn, $sql);
$countCompleted = pg_num_rows($result);

$sql = "SELECT * FROM $tablename_iMac WHERE \"Status\"='NOT ATTENDED' ";
$result = pg_query($dbconn, $sql);
$countNA = pg_num_rows($result);

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
		{ y: <?php echo ($countCMPN) ?>, label: "CMPN" },
		{ y: <?php echo ($countIT) ?>, label: "INFT" },
		{ y: <?php echo ($countELEX) ?>, label: "ELEX" },
		{ y: <?php echo ($countELEC) ?>, label: "ELEC"},
		{ y: <?php echo ($countEXTC) ?>, label: "EXTC"},
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
			<p id="top_charts_val"><?php echo ($countCompleted); ?></p>
			<br>
			<p id="top_charts_name">Completed</p>
		</center>
	</div>
	<div id="pending_reg">
		<center>
			<p id="top_charts_val"><?php echo ($countPending); ?></p>
			<br>
			<p id="top_charts_name">Pending</p>
		</center>
	</div>
	<div id="notAttended_reg">
		<center>
			<p id="top_charts_val"><?php echo ($countNA); ?></p>
			<br>
			<p id="top_charts_name">Not Attended</p>
		</center>
	</div>
</div>
<div id="bottom_charts">	
	<div id="branch-wise" ></div>
	<div id="batches-per-week"></div>
</div>
