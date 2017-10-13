<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="piechart" style="width: 900px; height: 500px;"></div>
<?php 
	$sql="";
	$result="";
	$sql = "SELECT * FROM $tableName WHERE Branch='Cmpn' ";
	$result = mysqli_query($conn,$sql);
	$countCMPN = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Branch='IT' ";
	$result = mysqli_query($conn,$sql);
	$countIT = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Branch='EXTC' ";
	$result = mysqli_query($conn,$sql);
	$countEXTC = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Branch='Electronics' ";
	$result = mysqli_query($conn,$sql);
	$countELEC = mysqli_num_rows($result);	

	$sql = "SELECT * FROM $tableName WHERE Branch='Electrical' ";
	$result = mysqli_query($conn,$sql);
	$countELEX = mysqli_num_rows($result);	

 ?>
<script>
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

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
			title: 'Department wise Registrations'
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));

		chart.draw(data, options);
	}
</script>