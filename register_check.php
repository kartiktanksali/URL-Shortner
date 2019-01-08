<?php
	require "connect.php";
	
	$username=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	
	$sql = "select count(*) from users where email='$email'";
    $result = mysqli_query($conn,$sql) ;
    while($out = mysqli_Fetch_row($result))
	{
	    $count = $out[0];
		if($count == 0)
		{
			$sql1="insert into users values('','$username','$email','$password')";
			$result1=mysqli_query($conn,$sql1) or die ("cannot execute");
			header("Location: login.php");
			
		}
		else
		{
			$message="The email you enetered already exists! Please enter a different email-id";
			include "register.php";
			
		}
	}
	
	
?>