<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>	login</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	    
</head>
<body style="background-image: url(egyptos.jpg);background-repeat: no-repeat;background-size: cover;">	

       		
	<form method="post" action="login.php">
	<h1 style="text-align: center;">Login Here!</h1>
		<?php include('errors.php'); ?>
		
		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
						name="login_user">
						
				Login
			</button>
		</div>
		


<p>
			New Here?
			<a href="register.php">
				Click here to register!
			</a>
		</p>



	</form>
	
</body>

</html>
