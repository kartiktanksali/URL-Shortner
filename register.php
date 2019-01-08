
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>URL Shortener</title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	
	<body>
	
		<div class="container">
			<h1 class="title"> Registration Form </h1>
			
			
			<div class="container">
			<form action="register_check.php" method="post" role="form">
	
					<div align="left" class="form-group">
						<label for="name">Name :</label> 
							<input class="form-control" type="text" name="name" id="name" placeholder="Name" size="35" />
					</div>
					<div align="left" class="form-group">
						<label for="email">Email-id :</label> 
							<input class="form-control" type="email" name="email" id="email" placeholder="Email-id" size="35" />
					</div>
					<div align="left" class="form-group">
						<label for="pwd">Password :</label>
							<input class="form-control" type="password" name="password" id="password" placeholder="Password" size="35"/>
					</div>

							
							<center>
							<input type="submit" value="Register" class="btn btn-default" />
							</center>							
						
				
			
				
			</form>
			</div>
			<?php
			if(isset($message))
			{
				echo $message;
			}
		   ?>
			
	
		</div>
	</body>
</html>