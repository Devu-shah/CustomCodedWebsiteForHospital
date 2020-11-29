<?php

include 'db_connect.php';

$patientname = $_POST['patientname'];
$age = $_POST['age'];
$phoneno = $_POST['phoneno'];
$money = $_POST['money'];
$extra_money = $_POST['exmoney'];
$add = $_POST['address'];
$total_money = is_integer($money + $extra_money);

if (!ctype_digit($money) and !isset($_POST['foc']) or !ctype_digit($extra_money) and !isset($_POST['foc'])) {
	$message = "Please Check if Both Money Value are Numbers...";
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
 	
 	if (isset($_POST['drname-samir'])) {
 		if (mysqli_num_rows($result) == 0) {
 			if (!isset($_POST['foc'])) {
 				$sql = "INSERT INTO `patients` ( `name`, `age`, `drname`, `phoneno`, `stime`, `Money`, `Extra`,`FOC`, `totalmoney`) VALUES ( '".$patientname."', '".$age."', 'Samir', '".$phoneno."', current_timestamp(), '".$money."', '".$extra_money."', 'No', '".$total_money."');";
				if (mysqli_query($conn, $sql)) {
						$message = "Patient Added to Record Successfully ! You have to Take Rs. ".$total_money." From the patient";
						echo '<script language="javascript">';
						echo 'alert("'.$message.'");';
						echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
						echo '</script>';
				}
			}
 			elseif (isset($_POST['foc'])) {
 				$sql = "INSERT INTO `patients` ( `name`, `age`, `drname`, `phoneno`, `stime`, `Money`, `Extra`,`FOC`) VALUES ( '".$patientname."', '".$age."', 'Samir', '".$phoneno."', current_timestamp(), '0', '0', 'Yes', '0');";
 				if (mysqli_query($conn, $sql))
	 				$message = "Patient Added to Record Successfully ! You have to Take Rs. 0 From the patient; You have Marked it as FOC";
						echo '<script language="javascript">';
						echo 'alert("'.$message.'");';
						echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
						echo '</script>';
				}
 			}
		}

		if (mysqli_num_rows($result) > 0) {

			// Checking for value of money
			if ($money > 150) {
			// $sql = "INSERT INTO `patients` ( `name`, `age`, `drname`, `phoneno`, `stime`, `Money`) VALUES ( '".$patientname."', '".$age."', 'Samir', '".$phoneno."', current_timestamp(), '".$money."');";
				if (mysqli_query($conn, $sql)) {
					$message = "You Can't Take More than 150 from the Patient!";
					echo '<script language="javascript">';
					echo 'alert("'.$message.'");';
					echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
					echo '</script>';
				}
			}

			if (!isset($_POST['foc'])){
				// Updating the specific patient's record
				$sql = "UPDATE `patients` SET `Money` = '".$money."' WHERE `patients`.`name` = '$patientname';";
				if (mysqli_query($conn, $sql)) {
					$message = "Patient Record Updated Successfully ! You have to Take Rs. 150 From the patient";
					echo '<script language="javascript">';
					echo 'alert("'.$message.'");';
					// echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
					echo '</script>';
				}
			}

			elseif (isset($_POST['foc'])) {
				$sql = "UPDATE `patients` SET `FOC` = 'Yes' WHERE `patients`.`name` = '$patientname';";
 				if (mysqli_query($conn, $sql)){
	 				$message = "Patient Added to Record Successfully ! You have to Take Rs. 0 From the patient; You have Marked it as FOC";
					echo '<script language="javascript">';
					echo 'alert("'.$message.'");';
					echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
					echo '</script>';
 				}
			}
		}
		
		else{
			echo "Error: ".mysqli_error($conn);
		}


	if (isset($_POST['drname-manish'])) {

		// Setting and trying to check if the Patient name is already there in the database
 		if (mysqli_num_rows($result) == 0) { // Taking the case when patient name is not there !
 			
 			// Not in free of charge part
 			if (!isset($_POST['foc'])) {
 				$sql = "INSERT INTO `patients` ( `name`, `age`, `drname`, `phoneno`, `stime`, `Money`, `Extra`,`FOC`) VALUES ( '".$patientname."', '".$age."', 'Samir', '".$phoneno."', current_timestamp(), '".$money."', '".$extra_money."', 'No');";
				if (mysqli_query($conn, $sql)) {
						$message = "Patient Added to Record Successfully ! You have to Take Rs. 300 From the patient";
						echo '<script language="javascript">';
						echo 'alert("'.$message.'");';
						echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
						echo '</script>';
				}
			}

			// There in Free of Charge Part 
 			elseif (isset($_POST['foc'])) {
 				$sql = "INSERT INTO `patients` ( `name`, `age`, `drname`, `phoneno`, `stime`, `Money`, `Extra`,`FOC`) VALUES ( '".$patientname."', '".$age."', 'Samir', '".$phoneno."', current_timestamp(), '0', '0', 'Yes');";
 				if (mysqli_query($conn, $sql)){
	 				$message = "Patient Added to Record Successfully ! You have to Take Rs. 0 From the patient; You have Marked it as FOC";
						echo '<script language="javascript">';
						echo 'alert("'.$message.'");';
						echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
						echo '</script>';
 					}
				}
 			}
		

		if (mysqli_num_rows($result) > 0) {	// If name is already there in database

			if ($money != 200) {
				if (mysqli_query($conn, $sql)) {
					$message = "You Can't Take More or less than 200 from the Patient!";
					echo '<script language="javascript">';
					echo 'alert("'.$message.'");';
					echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
					echo '</script>';
				}
			}

			if (!isset($_POST['foc'])) {
				$sql = "UPDATE `patients` SET `Money` = '".$money."' WHERE `patients`.`name` = '$patientname';";
				if (mysqli_query($conn, $sql)) {
					$message = "Patient Record Updated Successfully ! You have to Take Rs. 200 From the patient; You have not set it as FOC";
					echo '<script language="javascript">';
					echo 'alert("'.$message.'");';
					echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
					echo '</script>';
				}
			}

			elseif (isset($_POST['foc'])) {
				$sql = "UPDATE `patients` SET `Money` = '0' AND `FOC` = 'Yes' WHERE `patients`.`name` = '$patientname';";
 				if (mysqli_query($conn, $sql)){
	 				$message = "Patient Added to Record Successfully ! You have to Take Rs. 0 From the patient; You have Marked it as FOC";
					echo '<script language="javascript">';
					echo 'alert("'.$message.'");';
					echo 'window.location = "http://localhost/SamirHospitalProject/addpatients.php";';
					echo '</script>';
 				}
			}
		}
		else{
			echo "Error: ".mysqli_error($conn);
		}
	}
}

?>