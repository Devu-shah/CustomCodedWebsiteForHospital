<?php

// $username = $_POST['username'];
// $password = $_POST['user_password'];

include 'db_connect.php';

if (isset($_POST['login'])) {
	$username = htmlentities(mysqli_real_escape_string($conn, $_POST['username']));
	$password = htmlentities(mysqli_real_escape_string($conn, $_POST['user_password']));

	if (strlen($username) < 2 or strlen($username) > 20) {
		$message = "The name must be between 2 to 20 letters! ";
		echo '<script language="javascript">';
		echo 'alert("'.$message.'");';
		echo 'window.location = "http://localhost/SamirHospitalProject/";';
		echo '</script>';	
	}

	$sql = "SELECT username, password FROM `users` WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);

	// $check = mysqli_num_rows($result);

	if (mysqli_num_rows($result) > 0) {
			$message = "Congrats! You are Logged in Successfully ! Redirecting you to Add Patients Page!";
			echo '<script language="javascript">';
			echo 'alert("'.$message.'");';
			echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
			echo '</script>';
	}

	elseif (mysqli_num_rows($result) == 0) {
	$message = "User Not Registered; Ask to Admin for Logging In and Getting password. Or Check your password! ";
	echo '<script language="javascript">';
	echo 'alert("'.$message.'");';
	echo 'window.location = "http://localhost/SamirHospitalProject/";';
	echo '</script>';	
	}

	else{
		echo "Error: ". mysqli_error($conn);
	}
}
?>