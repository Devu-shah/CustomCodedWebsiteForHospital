<!DOCTYPE html>
<html>
<head>
	<title>Add Patients | Samir Hospital</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/signup.css"> -->

	<link rel="icon" href="img/favicon.png">

	<style type="text/css">
		body
			{
				background-color: black;
				background-repeat: no-repeat;
				background-size: cover;
			}

		.form-control{
				min-height: 41px;
				box-shadow: none;
				border-color: #e1e1e1;
			}

		.form-control: focus{
				border-color: #00cb82;
			}

		.form-control .btn {
				border-radius: 300px;
			}

		.form-header{
				margin: -30px -30px 20px;
				padding: 30px 30px 10px;
				text-align: center;
				background: #00cb82;
				border-bottom: 1px solid #eee;
				border-top: 1px solid #eee;
				color: #fff;
				border-radius: 30px
			}

		.form-header h2{
				font-size: 34px;
				font-weight: bold;
				margin: 0 0 10px;
			}

		.form-header p{
				margin: 20px 0 15px;
				font-size: 17px;
				line-height: normal;
			}

		.signin-form {
		    width: 620px;
		    margin: 0 auto;
		    padding: 30px 0;
		    padding-left: 2vh;
		    align-items: center;
		    padding-right: 2vh;
		    padding-top: 6vh;
			}

		.signin-form form{
				color: #999;
				border-radius: 30px;
				border-top-right-radius: 30px; 
				border-top-left-radius: 30px; 
				margin-bottom: 15px;
				background: #f0f0f0;
				box-shadow: 0px 2px 2px rgba(0,0,0,0.3);
				padding: 30px;
				text-align: center;
			}

		.signin-form .form-group{
				margin-bottom: 20px;
				margin-top: 10px;
				text-align: center;
			}

		.signin-form label{
				font-weight: normal;
				/*text-align: center;*/
				font-size: 19px;
			}

		.signin-form .btn{
				font-size: 19px;
				font-weight: bold;
				background: #00cb82;
				border: none;
				min-width: 200px;
			}

		.signin-form .btn:hover, .signin-form .btn:focus{
				background: #00cb82 !important;
				outline: none;
				color: darkblue;
			}

		.signin-form a{
				color: black;
				text-align: center;
			}

		.signin-form a:hover{
				text-decoration: underline;
				color:red;
			}


		.signin-form input[type = text], input[type = integer]{
			    text-align: center;
			    width: 250px;
			    height: 20px;
			}

		.signin-form input:hover{
				border-color: black;
			}
	</style>
</head>
<body>
	<div class="signin-form col-6">
		<form action="add_to_record.php" method='post'>
			<div class="form-header">
				<h2><font face="Brush Script Mt" size="7">Samir Hospital</font></h2>
				<p>
					<font face="Algerian" size='3' color="red"></font>
					Add Patients To Record
				</p>
			</div>
			<div class="form-group">
				<label><font face="algerian" size="5"> Patient Name </font></label><br>
				<input type="text" class='form-contorl' name='patientname' placeholder='Patient Name' autocomplete='off' required>
			</div>
			<div class="form-group">
				<label><font face="algerian" size="5"> Age </font></label><br>
				<input type="integer" class='form-contorl' name='age' placeholder='Patient Age' autocomplete='off' required>
			</div>
			<div class="form-group">
				<label><font face="algerian" size="5"> Phone Number </font></label><br>
				<input type="text" class='form-contorl' name='phoneno' placeholder="Patient's Phone Number" autocomplete='off' required>
			</div>
			<div class="form-group">
				<label><font face="algerian" size="5"> Money Paid </font></label><br>
				<input type="text" class='form-contorl' name='money' placeholder="Money Paid by Patient" autocomplete='off'>
				<h4>OR</h4>
				<input type="checkbox" name="foc">FOC?
			</div>
			<div class="form-checkbox" required>
				<h2> Name of Doctor Who is Consulting </h2>
				<input type="checkbox" name="drname-samir">Samir Shah
				<input type="checkbox" name="drname-manish">Manish Shah
			</div>
			<div class="form-group">
				<h2> Extra Money Paid by the Patient </h2>
				<input type="text" name="exmoney" placeholder="Extra Money from Patient">
			</div>
			<div class="form-group">
				<center>
					<button type="submit" class="btn btn-primary btn-block btn-lg" name="add" accesskey="enter">
						Add Patient
					</button>
				</center>
		    </div>
		</form>
	</div>
</div>
</body>
</html>