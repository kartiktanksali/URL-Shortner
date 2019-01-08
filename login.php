
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
			<h1 class="title"> Sign-In </h1>
			
			
			
			<form role="form" action="login_check.php" method="post">
				<div class="container" >
				<div align="left" class="form-group">
					<label>Username : </label>
							<input class="form-control" type="email" name="email" id="email" placeholder="Email-id" size="35" required/>
				</div>
				<div align="left" class="form-group">
					<label>Password : </label>
							<input class="form-control" type="password" name="password" id="password" placeholder="Password" size="35" required/>
				</div>
				</div>
						
							<center>
							<input type="submit" value="Sign-In" class="btn btn-default" />
							</center>							
						
				
				
				
			</form>
			<?php
			if(isset($message))
			{
				echo $message;
			}
		   ?>
			
	
		</div>
	</body>
</html>