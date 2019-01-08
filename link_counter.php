<?php
	require "connect.php";
	$link = $_GET['url'];
	$sql="select count from link_counter where link='$link'";
	$result=mysqli_query($conn,$sql) or die ("cannot execute");
	while($out=mysqli_fetch_row($result))
	{
		$count=$out[0];
		$count++;
		$sql1="update link_counter set count=$count where link='$link'";
		$result1=mysqli_query($conn,$sql1) or die ("cannot execute");
	}
	
	
	header("Location: {$link}");
	
?>