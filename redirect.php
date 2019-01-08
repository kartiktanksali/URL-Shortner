<?php 
require_once 'Shortener.php';
session_start();

if(isset($_GET['code']))
{
	$s = new Shortener;
	
	$code = $_GET['code'];
	
	if($url = $s->getUrl($code))
	{
		header("Location: {$url}");
		die();
	}
}

if(isset($_SESSION['id']))
{
	header('Location: user_index.php');
}
else
{
	header('Location: index.php');
}
?>