<?php include_once('db_connection.php'); ?>
<?php session_start(); ?>
<?php if (!isset($_SESSION['id'])) header("Location: 404.php"); ?>
<?php 
$message = "";
$success = "";
$err = false; 

if (isset($_REQUEST["updateform"])) { 

	$email         = $_REQUEST["email"]; 
	$firstname     = $_REQUEST["firstname"];
	$lastname      = $_REQUEST["lastname"];
	$number        = $_REQUEST["number"];
	$dateinput     = $_REQUEST["dateinput"];
	$gender        = $_REQUEST["gender"]; 
	$id 		   = $_SESSION['id'];


	$dateinput = date("Y-m-d", strtotime($dateinput));

	if (!strlen($email) >= 6) {
		$message.= "Please lengthen this Email input to 6 Character or more";
		$message.= "<br>";
		$err = true;
	}

	if (!strlen($firstname) >= 3) {
		$message.= "Please lengthen this Firstname input to 3 Character or more";
		$message.= "<br>";
		$err = true;
	}

	if (!strlen($lastname) >= 3) {
		$message.= "Please lengthen this Lastname input to 3 Character or more";
		$message.= "<br>";
		$err = true;
	}

	if (!strlen($number) >= 11) {
		$message.= "Please lengthen this Number input to 11 Character";
		$message.= "<br>";
		$err = true;
	}

	if ((!strlen($dateinput) >= 6) && (!strlen($dateinput) <= 50)) {
		$message.= "Please select correct date";
		$message.= "<br>";
		$err = true;
	}

	if ((!strlen($gender) == 4) || (!strlen($gender) == 6)) {
		$message.= "Please select correct gender";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z0-9.!@#&]{6,50}+$/", $email) == false) {
		$message.= "Email Some Special Character Is Not Allowed ";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z0-9 ]{3,255}+$/", $firstname) == false) {
		$message.= "Firstname Some Special Character Is Not Allowed & More Character Are Not Allowed";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z0-9 ]{3,50}+$/", $lastname) == false) {
		$message.= "Lastname Some Special Character Is Not Allowed & More Character Are Not Allowed";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[0-9]{11,11}+$/", $number) == false) {
		$message.= "Number Only Allowed ";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[0-9-]{6,50}+$/", $dateinput) == false) {
		$message.= "DateInput Some Special Character Is Not Allowed ";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z]{4,6}+$/", $gender) == false) {
		$message.= "Gender Some Special Character Is Not Allowed ";
		$message.= "<br>";
		$err = true;
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message.= "Please enter a valid e-mail address ";
		$message.= "<br>";
		$err = true;
	} 

	if (($message === "") && ($err === false)) {
		$email 		= mysqli_real_escape_string($conn, $email);
		$email 		= htmlspecialchars($email, ENT_QUOTES, "UTF-8");

		$firstname 	= mysqli_real_escape_string($conn, $firstname);
		$firstname 	= htmlspecialchars($firstname, ENT_QUOTES, "UTF-8");

		$lastname 	= mysqli_real_escape_string($conn, $lastname);
		$lastname 	= htmlspecialchars($lastname, ENT_QUOTES, "UTF-8");

		$number 	= mysqli_real_escape_string($conn, $number);
		$number 	= htmlspecialchars($number, ENT_QUOTES, "UTF-8");

		$dateinput 	= mysqli_real_escape_string($conn, $dateinput);
		$dateinput 	= htmlspecialchars($dateinput, ENT_QUOTES, "UTF-8");

		$gender 	= mysqli_real_escape_string($conn, $gender);
		$gender 	= htmlspecialchars($gender, ENT_QUOTES, "UTF-8");

		$chckusername = "SELECT * FROM users WHERE email = '" . $email . "'";
		$result1=mysqli_query($conn, $chckusername);
		$count1 =mysqli_num_rows($result1);

		if($count1 != 0){
			$message.= "Email Already Exist";
			$message.= "<br>";
			$err = true;
		}

		if ($err === false) {
			$sql = "UPDATE `users` SET `email` = '".$email."', `firstname` = '".$firstname."', `lastname` = '".$lastname."', `mobilenumber` = '".$number."', `date` = '".$dateinput."', `gender` = '".$gender."' WHERE `users`.`id` = ".$id.";";

			if (mysqli_query($conn, $sql)) {

				$sqlselect = "SELECT * FROM `users` WHERE `id` = $id;";
				$result    = mysqli_query($conn, $sqlselect);
				if (mysqli_num_rows($result) === 1) {

					$row = mysqli_fetch_assoc($result);
					
					$_SESSION['id'] 			= $row['id'];
					$_SESSION['email']			= $row['email'];
					$_SESSION['firstname'] 		= $row['firstname'];
					$_SESSION['lastname']		= $row['lastname'];
					$_SESSION['mobilenumber'] 	= $row['mobilenumber'];
					$_SESSION['date'] 			= $row['date'];
					$_SESSION['gender'] 		= $row['gender'];

					$success.= "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				} 
			} else {
				echo "Error updating record: " . mysqli_error($conn);
			}
		}
	}
}


?>
<?php include_once('navbar.php'); ?> 

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">



















			<?php include_once('sidebar.php'); ?>


















			<!-- Order Details -->
			<div class="col-md-9">
				<div class="section-title text-left">
					<h3 class="title">MY PROFILE</h3>
					<p>Protect your account</p>
				</div>
				<div class="order-details">
					<div class="billing-details" id="fontcolorstate">
						<!-- Login -->



						<form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="POST">
							<!-- Username / Email  -->
							<br>
							<div class="form-group">
								<label style="font-size: 12px;" class="form-check-label" for="login" id="lbusernamestate">Username</label>
								<input id="usernamestate" minlength="6" maxlength="50" value="<?php echo $_SESSION['login']; ?>" name="login" class="input" type="text" onkeypress="return /[0-9a-zA-Z.!@#&amp;]/i.test(event.key)" required="">
							</div>
							<div class="form-group">
								<label style="font-size: 12px;" class="form-check-label" for="login">Email Address</label>
								<input id="emailstate" minlength="6" maxlength="50" value="<?php echo $_SESSION['email']; ?>" name="email" class="input" type="email" onkeypress="return /[0-9a-zA-Z@.!@#&amp;]/i.test(event.key)" required="">
							</div>
							<!-- Username / Email  -->


							<div class="row register-form">
								<div class="col-md-6">
									<div class="form-group">
										<label style="font-size: 12px;" class="form-check-label" for="login">First Name</label>
										<input id="firstnamestate" minlength="3" maxlength="50" type="text" value="<?php echo $_SESSION['firstname']; ?>" name="firstname" class="input" onkeypress="return /[a-zA-Z ]/i.test(event.key)" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label style="font-size: 12px;" class="form-check-label" for="login">Last Name</label>
										<input id="lastnamestate" minlength="3" maxlength="50" type="text" value="<?php echo $_SESSION['lastname']; ?>" name="lastname" class="input" onkeypress="return /[a-zA-Z ]/i.test(event.key)" required>
									</div>
								</div>
							</div>




							<div class="form-group">
								<label style="font-size: 12px;" class="form-check-label" for="login">Phone Number</label>
								<input id="phoneumberstate" name="number" class="input" type="text" value="<?php echo $_SESSION['mobilenumber']; ?>" minlength="11" maxlength="11" onkeypress="return /[0-9]/i.test(event.key)" required>
							</div>




							<div class="row">
								<div class="col-md-7">
									<div class="form-group">
										<div class="input-group date" id="datetimepicker1">
											<input id="datestate" type="text" minlength="6" maxlength="50" class="form-control" value="<?php echo date("m/d/Y", strtotime($_SESSION['date'])); ?>" name="dateinput" required>
											<span class="input-group-addon">
												<i class="fa fa-calendar" aria-hidden="true"></i>
											</span>
										</div>
									</div>
								</div>

								<div class="col-md-5"  >
									<div class="row">
										<div class="col-md-6">
											<div class="form-group" style="padding-top: 6px; ">
												<input type="radio" name="gender" value="Male" <?php if (strtolower($_SESSION['gender']) == "male") echo "checked=\"checked\""; ?> required>
												&nbsp;
												<label class="radiolabel" style="font-size: 15px;">
													Male
												</label>
											</div>
										</div>

										<div class="col-md-6" id="cd-col-md-6">		
											<div class="form-group" style="padding-top: 6px; ">
												<input type="radio" name="gender" value="Female" <?php if (strtolower($_SESSION['gender']) == "female") echo "checked=\"checked\""; ?> required>
												&nbsp;
												<label class="radiolabel" style="font-size: 15px;">
													Female
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="row">
								<div class="col-md-6" id="editprofilesubmit">
									<input style="cursor: pointer;width: 100%; background-color: #1a9cb7; border-color: #1a9cb7;border-radius: 0;cursor: pointer;"  class="primary-btn order-submit"value="EDIT PROFILE">
								</div>

								<div class="col-md-6" id="cancelfilesubmit">
									<input style="cursor: pointer;width: 100%; background-color: #1a9cb7; border-color: #1a9cb7;border-radius: 0;cursor: pointer;" class="primary-btn order-submit"value="CANCEL">  
								</div>

								<div class="col-md-6" id="changefilesubmit">
									<input style="cursor: pointer;width: 100%; background-color: #1a9cb7; border-color: #1a9cb7;border-radius: 0;cursor: pointer;" class="primary-btn order-submit"value="CHANGE PASSWORD">
								</div>

								<div class="col-md-6" id="savefilesubmit">
									<input type="submit" name="updateform" style="cursor: pointer;width: 100%; background: linear-gradient(130deg, #ffa34f, #ff6f68); border-color: #1a9cb7;border-radius: 0;" class="primary-btn order-submit"value="SAVE">
								</div>
							</div>

						</form>
						<!-- /Login --> 





					</div>

					<?php if (!$message == "") { ?>
						<div class="form-group">
							<p class="text-center" style="color: red"><?php echo $message ?></p>
						</div>
					<?php } ?>

					<?php if (!$success == "") { ?>
						<div class="form-group">
							<p class="text-center" style="color: green"><?php echo $success ?></p>
						</div>
					<?php } ?>
				</div>
			</div>
			<!-- /Order Details -->











		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->



<?php include_once('footer.php'); ?>