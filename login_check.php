<?php
	session_start();
	require "connect.php";
	
	$password=$_POST['password'];
	$email=$_POST['email'];
	
	$sql = "select count(*) from users where email='$email' and password='$password'";
    $result = mysqli_query($conn,$sql) ;
    while($out = mysqli_Fetch_row($result))
	{
	    $count = $out[0];
		if($count == 0)
		{
				$message="Username or Password invalid!";
				include "login.php";
		
		}
		else
		{
			$sql1="select uid,name from users where email='$email' and password='$password'";
			$result1=mysqli_query($conn,$sql1) or die("cannot execute");
			 while($out1 = mysqli_Fetch_row($result1))
			 {
				$name = $out1[1];
				$id = $out1[0];
				
				$_SESSION['user'] = $name;
				$_SESSION['id'] = $id;
				header("Location: index.php");
			 } 
		}
	}
?>