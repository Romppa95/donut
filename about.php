<?php

$connect = mysqli_connect('127.0.0.1:49613','azure','6#vWHD_$', 'localdb');
session_start();
$query = 'select * from products';
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
while($product = mysqli_fetch_assoc($result)){
print_r($product);

}
}

?>

<!doctype html>
<html lang="en">
<head>
<?php
session_start();
?>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="koodia.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Donut store</title>
</head>
<body>
<div class="nav">
<a href="index.php">Home</a>
<a href="second.php">Products</a>
<a href="#contact">Contact</a>
<a class="active">About</a>

<div class="search"><p>not signed in</p>	
</div>
</div>
<img src="avatar.png" class="icon">

<h1>about</h1>

<?php

?>


</body>

<footer>
<?php
include 'footer.php';
?>
</footer>

</html>