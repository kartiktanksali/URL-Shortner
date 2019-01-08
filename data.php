<?php
	session_start();
	$id=$_SESSION['id'];
	require "connect.php";
	$sql=sprintf("select link,count from link_counter where uid=$id ;");
	$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
	$data = array();
	foreach ($result as $row)
	{
		$data[] = $row;
	}
	print json_encode($data);
?>