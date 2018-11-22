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
		<a class="active">Home</a>
		<a href="second.php">Products</a>
		<a href="account.php">Account</a>
		
<div class ="logout">
<a href="home.php?action=logout">Logout</a>
</div>

<div class="search">

<?php
include 'loggedin.php'
?>
</div>
</div>
<img src="avatar.png" class="icon">
<h1>Online donut shop</h1>

<div class="col-md-4">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<img src="donutstore.png" alt="Donut store" class="responsive"></div>


<div class="col-md-4" text-center><p><b>We started our donut shop when we were young. At first, we delivered the donuts by bikes.
Step by step, we grew to be the best donut shop in the world and then we decided to expand our services to internet.<b> <p></div>

</body>

<footer>
<?php
include 'footer.php';
?>
</footer>

</html>