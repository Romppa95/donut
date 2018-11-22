<?php include 'crud.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'head.php';

if(filter_input(INPUT_GET, 'action') == 'logout'){
	session_destroy();
  header("Location: index.php");
}

?>
	</head>
<body>
<div class="nav">
		<a href="home.php">Home</a>
		<a href="second.php">Products</a>
		<a class="active">Account</a>
		
<div class ="logout">
<a href="home.php?action=logout">Logout</a>
</div>


		<div class="search">
	<?php
	include 'loggedin.php';
	?>
			
		</div>
	</div>
	<img src="avatar.png" class="icon">
<?php include 'read.php';
?>




		<div class="account">

	<form method="post" action="crud.php" >
			
					
			<label>First name</label>
			<input type="text" name="Firstname" value="">
			<br><br>
			<label>Last name</label>
			<input type="text" name="Lastname" value="">
			<br><br>
			<label>Email</label><br>
			<input type="email" name="Email" value="">
			<br><br>
			<label>Address</label><br>
			<input type="text" name="Address" value="">

		
		
					
		
			<input type="submit" name="save" value="Save">
		
	</form>
</div>
</body>
<footer>
<?php
include 'footer.php';
?>
</footer>
</html>