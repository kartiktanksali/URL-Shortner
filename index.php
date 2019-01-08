<?php
	require "connect.php";
	session_start();

?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>URL Shortener</title>
		<link rel="stylesheet" href="css/style.css"/>
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
	<center>
		<div class="container">
			
			<?php 
			if(isset($_SESSION['user']))
			{
				$user = $_SESSION['user'];
				echo "<h3> Welcome {$user}</h3>";
				echo '<a href="logout.php"> Logout </a>';
			}
			?>
			
			<h1 class="title"> Enter your URL </h1>
			<br>
			<?php
			
			if(isset($_SESSION['feedback']))
			{
				echo "<p>{$_SESSION['feedback']}</p>";
				unset($_SESSION['feedback']);
				
			}
			?>
			
			
			<form action="shorten.php" method="post">
			
				<input type="url" name="url" placeholder="shorten your url" autocomplete="off" />
		
				<input type="submit" value="shorten" />
				<?php 
					if(isset($_SESSION['user']))
					{
						echo '<a href="bargraph.php"> View analysis</a>';
					}
				?>
			</form>
			
		</div>
		<br>
		<br>
		<?php 
		if(!isset($_SESSION['user']))
		{
		echo '<div class="container">
			<b><p> If you want to store your shortened URLs, <a href="register.php"> Register </a> with us! </p></b>
			
			<p> Already an user? <a href="login.php"> Sign-in </a></p> 
		</div>';
		}
		?>
		</div>
		<br>
		<br>
		<br>
		<?php 
			if(isset($_SESSION['id']))
			{
				$id=$_SESSION['id'];
				$sql="SELECT code,url FROM links Where id IN (SELECT url_id FROM user_links WHERE  uid='$id');";
				$result=mysqli_query($conn,$sql) or die("cannot execute");
				 
				if ($result->num_rows > 0) 
				{
					
					echo '<table class="table table-hover">
								<tr>
								<th> URLs </th>
								<th> Shortened URLs </th>
								
								</tr>';
					while($row = $result->fetch_row()) 
					{
						$code=$row[0];
						$link="clicks.php?code=$code";
						
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
			echo '</table>';
		?>
		
			
	</body>
</html>