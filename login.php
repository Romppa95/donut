<?php
$connect = mysqli_connect('127.0.0.1:49613','azure','6#vWHD_$', 'localdb');
session_start();
//Checking if usernamebox has value in it
if(isset($_POST['username']))
{
login($username, $connect, $uusername, $password, $ppassword, $query, $result, $row);

}



function login($username, $connect, $uusername, $password, $ppassword, $query, $result, $row) {
//removing special characters from variables and sanitizing them
$username =mysqli_real_escape_string($connect,$_POST['username']);
$uusername = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$password =mysqli_real_escape_string($connect,$_POST['password']);
$ppassword = filter_var($password, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
// selecting all from database log 
$query = "select * from log where username = '".$username."'";
$result = mysqli_query($connect, $query);
//checking if given username matches to database
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_array($result))
{
//checking if password is correct
if(password_verify($password, $row['password']))
{
$_SESSION['username'] = $username;
header("Location: home.php");
}
else
{
header("Refresh: 1 url=index.php");
echo '<script>alert("Wrong user credentials, redirecting to loginpage")</script>';

}}
}
else{
header("Refresh: 1 url=index.php");
echo '<script>alert("Wrong user credentials, redirecting to loginpage")</script>';
}

}


?>


