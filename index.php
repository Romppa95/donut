<!doctype html>
<html lang="en">
<head>
<?php
include 'head.php';

if(isset($_SESSION['username'])){
header("Location: home.php");
exit();

}
				
?>
</head>
<div class="nav">
</div>
<body>
<h1>Online donut shop</h1>

<div class="login">
	<img src="avatar.png" class="avatar">
	<h1>Sign in</h1>
	
<form action="login.php" method="POST">
<p>Username</p>
<input type="text" name="username" placeholder="enter username" required>
<br><br>
<p>Password</p>
<input type="password" name="password" placeholder="enter password" required>
<br><br>
<input type="submit" name="signin" value="Login">
<br><br>		
<a href="register.php">Create a new account</a>
</form>
</div>
</body>

<footer>
<?php
include 'footer.php';
?>
</footer>

</html>