<?php
//connecting to database
$connect = mysqli_connect('127.0.0.1:49613','azure','6#vWHD_$', 'localdb');
session_start();
//Checks if register has a value
if(isset($_POST['register']))
{
//Checks if username or password is empty
if(empty($_POST['username']) || empty($_POST['password']))
{
echo '<script>alert("Both Fields are required")</script>';
}
else
{
//Creating variables and sanitizing them
$username = mysqli_real_escape_string($connect, $_POST['username']);
$uusername = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$password = mysqli_real_escape_string($connect, $_POST['password']);
//hashing password
$password = password_hash($password, PASSWORD_DEFAULT);
$ppassword = filter_var($password, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
//inserting values into database named log and redirecting to loginpage
$query = "insert into log(username, password) values('$username', '$password')";
if(mysqli_query($connect, $query))
{
header("Location: index.php");

}
}
}


?>
