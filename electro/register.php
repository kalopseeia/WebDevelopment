<?php include_once('db_connection.php'); ?>
<?php session_start(); ?>
<?php if (isset($_SESSION['id'])) header("Location: 404.php"); ?>
<?php 

$message = "";
$success = "";
$err = false;
$login = "";
$email = "";
$password = "";
$password_conf = "";
$firstname = "";
$lastname = "";
$number = "";
$dateinput = "";
$gender = "";

// login/email/password/password_conf/firstname/lastname/number/dateinput/gender/termcondition



if (isset($_REQUEST["registerform"])) {
	$login         = $_REQUEST["login"];
	$email         = $_REQUEST["email"];
	$password      = $_REQUEST["password"];
	$password_conf = $_REQUEST["password_conf"];
	$firstname     = $_REQUEST["firstname"];
	$lastname      = $_REQUEST["lastname"];
	$number        = $_REQUEST["number"];
	$dateinput     = $_REQUEST["dateinput"];
	$gender        = $_REQUEST["gender"];
	$termcondition = $_REQUEST["termcondition"];
 
	// echo "first : ".$dateinput;
	// echo "<br>";
	// $dateinput = date("Y-m-d", strtotime(strstr($dateinput, ' ', true)));
	// Convert Date Format
	$dateinput = date("Y-m-d", strtotime($dateinput));
	// echo $dateinput;
	// echo "<br>";
	// $dateinput = date("m/d/Y", strtotime($dateinput));
	// echo $dateinput;


	if (!strlen($login) >= 6) {
		$message.= "Please lengthen this Username input to 6 Character or more";
		$message.= "<br>";
		$err = true;
	}

	if (!strlen($email) >= 6) {
		$message.= "Please lengthen this Email input to 6 Character or more";
		$message.= "<br>";
		$err = true;
	}

	if (!strlen($password) >= 6) {
		$message.= "Please lengthen this Password input to 6 Character or more";
		$message.= "<br>";
		$err = true;
	}

	if ($password != $password_conf) {
		$message.= "Password and Confirmation Password Should Match";
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

	if (!strlen($termcondition) == 2) {
		$message.= "Check I agree to our terms & condition";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z0-9.!@#&]{6,50}+$/", $login) == false) {
		$message.= "Login Some Special Character Is Not Allowed ";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z0-9.!@#&]{6,50}+$/", $email) == false) {
		$message.= "Email Some Special Character Is Not Allowed ";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z0-9.!@#&]{6,255}+$/", $password) == false) {
		$message.= "Password Some Special Character Is Not Allowed ";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z0-9 ]{3,255}+$/", $firstname) == false) {
		$message.= "Firstname Some Special Character Is Not Allowed & More Character Are Not Allowed ";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z0-9 ]{3,50}+$/", $lastname) == false) {
		$message.= "Lastname Some Special Character Is Not Allowed & More Character Are Not Allowed ";
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

	if (preg_match("/^[a-zA-Z]{2,}+$/", $termcondition) == false) {
		$message.= "Terms Condition Some Special Character Is Not Allowed ";
		$message.= "<br>";
		$err = true;
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message.= "Please enter a valid e-mail address ";
		$message.= "<br>";
		$err = true;
	} 


	if (($message === "") && ($err === false)) {

		$login 		= mysqli_real_escape_string($conn, $login);
		$login 		= htmlspecialchars($login, ENT_QUOTES, "UTF-8");

		$email 		= mysqli_real_escape_string($conn, $email);
		$email 		= htmlspecialchars($email, ENT_QUOTES, "UTF-8");

		$password 	= mysqli_real_escape_string($conn, $password);
		$password 	= hash("sha1", $password, false);

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

		$chckusername = "SELECT * FROM users WHERE login = '" . $login . "'";
		$result1=mysqli_query($conn, $chckusername);
		$count1 =mysqli_num_rows($result1);

		if($count1 != 0){
			$message.= "Username Already Exist";
			$message.= "<br>";
			$err = true;
		}

		$chckemail = "SELECT * FROM users WHERE email = '" . $email . "'";
		$result2=mysqli_query($conn, $chckemail);
		$count2 =mysqli_num_rows($result2);

		if($count2 !=0){
			$message.= "Email Already Exist";
			$message.= "<br>";
			$err = true; 
		}

		if ($err === false) {
			$sql = "INSERT INTO `users` (`id`, `login`, `password`, `email`, `secret`, `firstname`, `lastname`, `mobilenumber`, `date`, `gender`, `activation_code`, `activated`, `reset_code`, `admin`) VALUES (NULL, '".$login."', '".$password."', '".$email."', NULL, '".$firstname."', '".$lastname."', '".$number."', '2021-12-15', '".$gender."', NULL, '1', NULL, '0');";
			

			if (mysqli_query($conn, $sql)) {
				$success.= "<font color=\"green\">Account Created!</font>";
				$message = "";

				$err = false;
				$login = "";
				$email = "";
				$password = "";
				$password_conf = "";
				$firstname = "";
				$lastname = "";
				$number = "";
				$dateinput = "";
			}else {
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

			<div class="col-md-7">
				<!-- Billing Details -->
				<div class="billing-details">


					<!-- Login -->
					<form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="POST">
						<div class="section-title">
							<h3 class="title">Register</h3>
						</div>



						<!-- Username / Email  -->

						<div class="form-group">
							<input minlength="6" maxlength="50" value="<?php if (!$login == "") echo $login; ?>" name="login" class="input" type="text" onkeypress="return /[0-9a-zA-Z.!@#&]/i.test(event.key)" placeholder="Username*" required>
						</div>
						<div class="form-group">
							<input minlength="6" maxlength="50" value="<?php if (!$email == "") echo $email; ?>" name="email" class="input" type="email"  onkeypress="return /[0-9a-zA-Z@.!@#&]/i.test(event.key)" placeholder="Email*" required>
						</div>
						<!-- Username / Email  -->




						<!-- Password / Conf Password  -->
						<div class="row register-form">
							<div class="col-md-6">
								<div class="form-group">
									<input minlength="6" maxlength="255" name="password" class="input" type="password" onkeypress="return /[0-9a-zA-Z.!@#&]/i.test(event.key)" placeholder="Password*" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<input minlength="6" maxlength="255" name="password_conf" class="input" type="password" onkeypress="return /[0-9a-zA-Z.!@#&]/i.test(event.key)" placeholder="Confirm Password*" required>
								</div>
							</div>
						</div>
						<!-- Password / Conf Password  -->





						<div class="row register-form">
							<div class="col-md-6">
								<div class="form-group">
									<input minlength="3" maxlength="50" type="text" value="<?php if (!$firstname == "") echo $firstname; ?>" name="firstname" class="input" placeholder="First Name*" value="" onkeypress="return /[a-zA-Z ]/i.test(event.key)" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<input minlength="3" maxlength="50" type="text" value="<?php if (!$lastname == "") echo $lastname; ?>" name="lastname" class="input" placeholder="Last Name*" value="" onkeypress="return /[a-zA-Z ]/i.test(event.key)" required>
								</div>
							</div>
						</div>




						<div class="form-group">
							<input name="number" class="input" type="text" value="<?php if (!$number == "") echo $number; ?>" minlength="11" maxlength="11" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Mobile Number* 09xxxxxxxxx" required>
						</div>




						<div class="row register-form">
							<div class='col-lg-8'>
								<div class="form-group">
									<div class="input-group date" id="datetimepicker1">
										<input type="text" minlength="6" maxlength="50" class="form-control"  name="dateinput" required>
										<span class="input-group-addon">
											<i class="fa fa-calendar" aria-hidden="true"></i>
										</span>
									</div>
								</div>
							</div>





							<div class="col-md-4" id="cd-col-md-4">
								<div class="row register-form">
									<div class="col-md-6" id="cd-col-md-6">		
										<div class="form-group" style="padding-top: 6px; ">
											<input type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked=\"checked\""; ?> required> 
											&nbsp;
											<label class="radiolabel" style="font-size: 15px;">
												Male
											</label>
										</div>
									</div>
									<div class="col-md-6" id="cd-col-md-6">		
										<div class="form-group" style="padding-top: 6px; ">
											<input type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked=\"checked\""; ?> required>
											&nbsp;
											<label class="radiolabel" style="font-size: 15px;">
												Female
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>









						<div class="input-checkbox">
							<input name="termcondition" type="checkbox" id="terms" required>
							<label for="terms" >
								<span></span>
								I've read and accept the <a href="#">terms &amp; conditions</a>
							</label>
						</div>

						<div class="form-group">
							<input name="registerform" class="btn-block btn-color f-g-btn-input" type="submit" value="Sign Up">
						</div>
						<div class="form-group">
							<p class="text-center">Already Have An Account ? <a href="login.php">Sign In</a></p>
						</div>
					</form>
					<!-- /Login -->

				</div>
				<!-- /Billing Details -->

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

			<!-- Order Details -->
			<div class="col-md-5 order-details">
				<div class="row">
					<!-- shop -->
					<div class="shop">
						<div class="shop-img">
							<img src="./img/shop01.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Laptop<br>Collection</h3>
							<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="shop">
						<div class="shop-img">
							<img src="./img/shop01.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Laptop<br>Collection</h3>
							<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
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