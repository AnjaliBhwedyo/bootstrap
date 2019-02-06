<?php include('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>user registration</title>
	<link rel="stylesheet" type="text/css" href="register.css"></link>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
	<div class="input">
		<label>Username</label>
		<input type="text" name="Username">
	</div>
	<div class="input">
		<label>Email</label>
		<input type="text" name="email" required="required">
	</div>
	<div class="input">
		<label>password</label>
		<input type="password" name="password1" required="required">
	</div>
	<div class="input">
		<label>Confirm password</label>
		<input type="password"  name="password2" required="required">
	</div>
	<div class="input">
	<button type="submit" name="register" class="btn">register</button>	
	</div>
	<p>
		Already a member ???<a href="login.php">sign in</a></p>
	</p>
</form>

</body>
</html>