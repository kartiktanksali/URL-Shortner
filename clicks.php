<?php
	require "connect.php";
	session_start();
	$id=$_SESSION['id'];
	$code=$_GET['code'];
?>
<html>
	<head><title></title></head>
	<body>
		<?php
		
						$sql2="select count from link_counter where code ='$code'";
						$result2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
						while($row2 = $result2->fetch_row()) 
						{
?>
		<p> number of clicks = <?php echo $row2[0]; ?> </p>
		
<?php
}
?>
	</body>
</html>
