<!doctype html>
<html lang="en">
  <head>

<?php
include 'head.php'
?>
      </head>
  <body>
  <div class="nav">
 </div>

<div class="register">
	
	<h1 text-align: center>Register</h1>
	<br>
	<form action="registration.php" method="post">
		
		
		<p>Username</p>
		<input type="text" name="username" placeholder="enter username" required>
		<br>
		<br>
		<p>Password</p>
		<input type="password" name="password" placeholder="enter password"required>
		<br>
		<br>
		<input type="submit" name="register" value="Register">
		<br>
		<br>
			</form>
</div>
 
    



    
   
  </body>
<footer>
<?php
include 'footer.php'
?>
</html>