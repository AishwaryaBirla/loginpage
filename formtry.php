
<!DOCTYPE html>
<html>
<head><title>signin acoount
</title>  	
<link href="style.css" rel="stylesheet" type="text/css"> 			
</head>
<body>
	<div id="login">
  <h2>Login Form</h2>
	<form method="post"action ="welcome.php">
		USERNAME: <br>
		<input type="text" id="uname" name="uname" placeholder="enter your username"/ ><br>
		EMAIL ID:<br>
		<input type="text"  name="mail" id="mail" placeholder="enter your email ID"/><br>
		PASSWORD:		<br>
		<input type="password" name="pass" id="pass" placeholder="enter your password"/><br>
		<input type ="checkbox" id="rem" name="remember" value="1"> Remember me<br>
		<input type="submit" value="login" name="login"/>
		<span></span>
	</form>
</body>
</html>