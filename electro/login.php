<?php include_once('db_connection.php'); ?>
<?php session_start(); ?>
<?php if (isset($_SESSION['id'])) header("Location: 404.php"); ?>
<?php 

$message = "";
$err = false;

if (isset($_POST["loginform"])) {	

	$login    = $_POST["login"];
	$password = $_POST["password"];

	if (!strlen($login) >= 6) {
		$message.= "Please lengthen this Username input to 6 Character or more";
		$message.= "<br>";
		$err = true;
	}

	if (!strlen($password) >= 6) {
		$message.= "Please lengthen this Password input to 6 Character or more";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z0-9.!@#&]{6,50}+$/", $login) == false) {
		$message.= "Login Some Special Character Is Not Allowed ";
		$message.= "<br>";
		$err = true;
	}

	if (preg_match("/^[a-zA-Z0-9.!@#&]{6,255}+$/", $password) == false) {
		$message.= "Password Some Special Character Is Not Allowed ";
		$message.= "<br>";
		$err = true;
	}


	if (($message === "") && ($err === false)) {

		$login 		= mysqli_real_escape_string($conn, $login);
		$login 		= htmlspecialchars($login, ENT_QUOTES, "UTF-8");

		$password = mysqli_real_escape_string($conn, $password);
		$password = hash("sha1", $password, false);

		$sql    = "SELECT * FROM users WHERE (login = '".$login."' OR email = '".$login."') AND BINARY password = '".$password."'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

			$_SESSION['id'] 			= $row['id'];
			$_SESSION['login']			= $row['login'];
			$_SESSION['password'] 		= $row['password'];
			$_SESSION['email']			= $row['email'];
			$_SESSION['firstname'] 		= $row['firstname'];
			$_SESSION['lastname']		= $row['lastname'];
			$_SESSION['mobilenumber'] 	= $row['mobilenumber'];
			$_SESSION['date'] 			= $row['date'];
			$_SESSION['gender'] 		= $row['gender'];
			$_SESSION['activated'] 		= $row['activated'];
			$_SESSION['admin'] 			= $row['admin'];

			if($row['activated'] == 0){
				$message.= "Your account is block contact our administrator <a href=\"help.php\">Here</a>.";
				$message.= "<br>";
				session_unset();
				session_destroy();
			}else{
				header("Location: index.php"); 
			}

		}else {
			$message.= "Account is not Exist or Wrong Password";
			$message.= "<br>";
		}
	} 
} 
?>
<?php include_once ('navbar.php'); ?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-7">
				<!-- Billing Details -->
				<div class="billing-details">
					<form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="POST">
						<div class="section-title">
							<h3 class="title">Login</h3>
						</div>
						<div class="form-group">
							<input minlength="6" maxlength="50" name="login" class="input" type="text" onkeypress="return /[0-9a-zA-Z.!@#&]/i.test(event.key)" placeholder="Username*" required>
						</div>
						<div class="form-group">
							<input minlength="6" maxlength="255" name="password" class="input" type="password" onkeypress="return /[0-9a-zA-Z.!@#&]/i.test(event.key)" placeholder="Password*" required>
						</div>

						<div class="form-group">
							<input name="loginform" class="btn-block btn-color f-g-btn-input" type="submit" value="Sign In"></input>
						</div>
						<div class="form-group">
							<p class="text-center">Don't Have An Account ? <a href="register.php">Sign Up</a></p>
						</div>
					</form>

					<?php if (!$message == "") { ?>
						<div class="form-group">
							<p class="text-center" style="color: red"><?php echo $message ?></p>
						</div>
					<?php } ?>


				</div>
				<!-- /Billing Details -->

			</div>

			<!-- Order Details -->
			<div class="col-md-5 order-details">
				<div class="section-title text-center">
					<h3 class="title">Your Order</h3>
				</div>
				<div class="order-summary">
					<div class="order-col">
						<div><strong>PRODUCT</strong></div>
						<div><strong>TOTAL</strong></div>
					</div>
					<div class="order-products">
						<div class="order-col">
							<div>1x Product Name Goes Here</div>
							<div>$980.00</div>
						</div>
						<div class="order-col">
							<div>2x Product Name Goes Here</div>
							<div>$980.00</div>
						</div>
					</div>
					<div class="order-col">
						<div>Shiping</div>
						<div><strong>FREE</strong></div>
					</div>
					<div class="order-col">
						<div><strong>TOTAL</strong></div>
						<div><strong class="order-total">$2940.00</strong></div>
					</div>
				</div>
				<div class="payment-method">
					<div class="input-radio">
						<input type="radio" name="payment" id="payment-1">
						<label for="payment-1">
							<span></span>
							Direct Bank Transfer
						</label>
						<div class="caption">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="input-radio">
						<input type="radio" name="payment" id="payment-2">
						<label for="payment-2">
							<span></span>
							Cheque Payment
						</label>
						<div class="caption">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="input-radio">
						<input type="radio" name="payment" id="payment-3">
						<label for="payment-3">
							<span></span>
							Paypal System
						</label>
						<div class="caption">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="input-checkbox">
					<input type="checkbox" id="terms">
					<label for="terms">
						<span></span>
						I've read and accept the <a href="#">terms &amp; conditions</a>
					</label>
				</div>
				<a href="#" class="primary-btn order-submit">Place order</a>
			</div>




			<!-- /Order Details -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
  


<?php include_once ('footer.php')?>