<?php

include 'db_connect.php';

// $patientname = htmlentities(mysqli_real_escape_string($conn, $_POST['patientname']));
// $age         = htmlentities(mysqli_real_escape_string($conn, $_POST['age']));
// $phoneno     = htmlentities(mysqli_real_escape_string($conn, $_POST['phoneno']));
// $doctorname  = htmlentities(mysqli_real_escape_string($conn, $_POST['drname']));

# User isset in checkbox for dr name

$patientname = $_POST['patientname'];
$age = $_POST['age'];
$phoneno = $_POST['phoneno'];
$drname = $_POST['drname'];
$money = $_POST['money'];

if (!ctype_digit($money)) {
	$message = "Please Add Money Value as A Number...";
	echo '<script language="javascript">';
	echo 'alert("'.$message.'");';
	echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
	echo '</script>';
	exit();
}

elseif (strlen($phoneno) < 10 or strlen($phoneno) > 10) {
	$message = "Please Add a proper Phone Number. It should be of 10 Digits! You have Entered it of '".strlen($phoneno)."' digits...";
	echo '<script language="javascript">';
	echo 'alert("'.$message.'");';
	echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
	echo '</script>';
	exit();
}

else{
	$sql = "SELECT * FROM `patients` WHERE name = '$patientname'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		if (mysqli_num_rows($result) == 0) {
			$sql = "INSERT INTO `patients` ( `name`, `age`, `drname`, `phoneno`, `stime`, `Money`) VALUES ( '".$patientname."', '".$age."', '".$drname."', '".$phoneno."', current_timestamp(), '".$money."');";
			if (mysqli_query($conn, $sql)) {
				$message = "Patient Added to Record Successfully !";
				echo '<script language="javascript">';
				echo 'alert("'.$message.'");';
				echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
				echo '</script>';
			}
		}
		elseif (mysqli_num_rows($result) > 0) {
			if ($money > 150) {
				$message = "Please Put Moneytary Value as 150 Rs. !";
				echo '<script language="javascript">';
				echo 'alert("'.$message.'");';
				echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
				echo '</script>';
				exit();
			}
			$sql = "UPDATE `patients` SET `Money` = '".$money."' WHERE `patients`.`name` = '$patientname';";

			if (mysqli_query($conn, $sql)) {
					$message = "Patient Record Updated Successfully !";
					echo '<script language="javascript">';
					echo 'alert("'.$message.'");';
					echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
					echo '</script>';
				}

			else{
				echo "Error: ".mysqli_error($conn);
			}
		}
		else{
			echo "error: ".mysqli_error($conn);
		}
	}

	else{
		echo "error: ".mysqli_error($conn);
	}
}


?>