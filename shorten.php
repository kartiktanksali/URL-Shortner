
<?php
require "connect.php";
session_start();

require_once 'Shortener.php';

$s = new Shortener;

if(isset($_POST['url']))
{
	$url = $_POST['url'];
	
	if($code = $s->makeCode($url))
	{
		
		$_SESSION['feedback'] = "Congratulations!! You have shortened your URL:<a href=\"http://localhost/urlshort/{$code}\">http://localhost/urlshort/{$code} </a> ";
		
		$sql="select id from links where code='$code'";
		$result=mysqli_query($conn,$sql) or die("cannot execute");
		while($out=mysqli_fetch_row($result))
		{
			$id=$out[0];
		}	
		if(isset($_SESSION['id']))
		{
			$uid=$_SESSION['id'];
		
		$sql1="insert into user_links values('',$uid,$id)";
		$result1=mysqli_query($conn,$sql1) or die("cannot execute1");
		$url="http://localhost/urlshort/{$code}";
		$sql2="insert into link_counter values('','$url','$code',0,$uid)";
		$result2=mysqli_query($conn,$sql2) or die("cannot execute2");
		}
	}
	else
	{
		$_SESSION['feedback'] = "There was a problem. Invalid URL";
	}
	
}

header('Location: index.php');

?>