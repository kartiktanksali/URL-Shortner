<?php
	require "connect.php";
	session_start();

?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>URL Shortener</title>
		<link rel="stylesheet" href="style.css"/>
	</head>
	
	<body>
	
		<div class="container">
		<table>
		<tr>
			<th> URLs </th>
			<th> Shortened URLs </th>

			</tr>
			
		<?php 
			if(isset($_SESSION['id']))
			{
				$id=$_SESSION['id'];
				$sql="SELECT code,url FROM links Where id IN (SELECT url_id FROM user_links WHERE  uid='$id');";
				$result=mysqli_query($conn,$sql) or die("cannot execute");
				if ($result->num_rows > 0) 
				{
					while($row = $result->fetch_row()) 
					{
					 
		?>

		<tr>
			<td> <?php echo $row[1]; ?> </td>
				<td> <a href="link_counter.php?url=http://localhost/urlshort/<?php echo $row[0]; ?>">http://localhost/urlshort/<?php echo $row[0]; ?> </a> 
			</td>
			
		</tr>
		</center>
		<?php 
			}
			}
			}
			
		?>
		</table>
		</div>
	</body>
</html>