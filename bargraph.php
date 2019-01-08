<?php 
	require "connect.php";
	session_start();
	$id=$_SESSION['id'];
	$sql="select link,code,count from link_counter where uid=$id";
	$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>URL Shortener</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<title>ChartJS - BarGraph</title>
		<style type="text/css">
			#chart-container {
				width: 1200px;
				height: 450px;
			}
		</style>
	</head>
	<body>
		<div id="chart-container">
			<canvas id="mycanvas" width="1200px" height="450px"></canvas>
		</div>
		<br/><br/><br/><br/><br/><br/><br/>
		
		<div width="500px" height="500px">
		<div class="panel panel-info">
		<div class="panel-heading"><center> Analysis Details Table</center></div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped">
			<thead><tr>
				<th>Links</th>
				<th>Code</th>
				<th>Counts</th>
			</tr></thead>
			<?php
				while($out=mysqli_fetch_row($result))
				{
			?>
			<tr>
				<td><?php echo $out[0]; ?></td>
				<td><?php echo $out[1]; ?></td>
				<td><?php echo $out[2]; ?></td>
			</tr>
			<?php
			}
			?>
			</table>
			</div>
			</div>
			</div>
		</div>
		<!-- javascript -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/Chart.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>