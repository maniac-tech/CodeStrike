<div id="overview_chart">
	Main chart goes here
</div>
<div id="piechart" ></div>
<div id="chart_div"></div>
<?php 
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
?>
<script>
	
	google.charts.setOnLoadCallback(drawChart);
	google.charts.setOnLoadCallback(drawBasic);

function drawChart() {

		var data = google.visualization.arrayToDataTable([
			['Registrations', 'Per week'],
			['CMPN',     <?php echo $countCMPN; ?>],
			['INFT',      <?php echo $countIT; ?>],
			['ELEX',  <?php echo $countEXTC; ?>],
			['ELEC', <?php echo $countELEX; ?>],
			['EXTC',    <?php echo $countEXTC; ?>]
			]);

		var options = {
			title: 'Department wise Registrations',
			is3D: true,
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));

		chart.draw(data, options);
	}

function drawBasic() {
		var data = google.visualization.arrayToDataTable([
			['Year', 'Registrations',],
			['SE', <?php echo $countSE; ?>],
			['TE', <?php echo $countTE; ?>],
			['BE', <?php echo $countBE; ?>],
			]);

		var options = {
			title: 'Year wise Registrations',
			chartArea: {width: '50%'},
			hAxis: {
				title: 'Total Registrations',
				minValue: 0
			},
			vAxis: {
				title: 'Year'
			}
		};

		var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

		chart.draw(data, options);
	}
</script>