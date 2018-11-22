<?php 
	
	$database = mysqli_connect('127.0.0.1:49613','azure','6#vWHD_$', 'localdb');
	session_start();
	//if the save button is pressed, the following happens
	if (isset($_POST['save'])) {
			
		//creating variables and santizing them
		$username = $_SESSION['username'];
		$firstname = $_POST['Firstname'];
		$ffirstname = filter_var($firstname, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$lastname = $_POST['Lastname'];
		$llastname = filter_var($lastname, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$email = $_POST['Email'];
		$eemail = filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
		$address = $_POST['Address'];
		$aaddress = filter_var($address, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		
	$query = "UPDATE log SET Firstname='$firstname', Lastname='$lastname', Email='$email', Address='$address' WHERE username='$username'";
	//executes query and redirects to account.php
	if(mysqli_query($database, $query)) 
		{
			 
			header('location: account.php');
			
	}


			


}
// if you press delete button, the account will be deleted and you'll be instantly logged out to the login page
if (isset($_GET['del'])) {

    $username = $_SESSION['username'];
    mysqli_query($database, "DELETE FROM log WHERE username='$username'");
    $_SESSION['message'] = "Account deleted!"; 
    session_destroy();
    header("Location: index.php");
	

}



?>

