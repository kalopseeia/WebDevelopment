<?php include_once('../db_connection.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('navbar.php'); ?>


<section>
	<div class="container">
		<main>
			<div class="row g-5">




				<!-- Cart -->
				<div class="col-md-5 col-lg-4 order-md-last">
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span class="text-primary">Your cart</span>
						<span class="badge bg-primary rounded-pill">3</span>
					</h4>
					<ul class="list-group mb-3">
						<li class="list-group-item d-flex justify-content-between lh-sm">
							<div>
								<h6 class="my-0">Product name</h6>
								<small class="text-muted">Brief description</small>
							</div>
							<span class="text-muted">$12</span>
						</li>
						<li class="list-group-item d-flex justify-content-between lh-sm">
							<div>
								<h6 class="my-0">Second product</h6>
								<small class="text-muted">Brief description</small>
							</div>
							<span class="text-muted">$8</span>
						</li>
						<li class="list-group-item d-flex justify-content-between lh-sm">
							<div>
								<h6 class="my-0">Third item</h6>
								<small class="text-muted">Brief description</small>
							</div>
							<span class="text-muted">$5</span>
						</li>
						<li class="list-group-item d-flex justify-content-between bg-light">
							<div class="text-success">
								<h6 class="my-0">Promo code</h6>
								<small>EXAMPLECODE</small>
							</div>
							<span class="text-success">−$5</span>
						</li>
						<li class="list-group-item d-flex justify-content-between">
							<span>Total (USD)</span>
							<strong>$20</strong>
						</li>
					</ul>

					<form class="card p-2">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Promo code">
							<!-- <button type="submit" class="btn btn-secondary">Redeem</button> -->
						</div>
					</form>
				</div>
				<!-- Cart -->



































				<div class="col-lg-7 col-lg-8">
					<h4 class="mb-3">REGISTER</h4>
					<form class="row g-3" id="registerform">





						<!-- Username / Email -->
						<div class="col-lg-12">
							<label for="users_username" class="form-label -nHXdi">Username</label>
							<div class="input-group has-validation">
								<span class="input-group-text" id="inputGroupPrepend3">@</span>
								<input type="text" class="form-control" id="users_username">
								<div class="invalid-feedback"> </div>
							</div>
						</div>
						<div class="col-lg-12">
							<label for="users_email" class="form-label -nHXdi">Email</label>
							<div class="input-group has-validation">
								<input type="email" class="form-control" id="users_email">
								<div class="invalid-feedback"> </div>
							</div>
						</div>
						<!-- Username / Email -->





						<!-- Password / Conf Password  -->
						<div class="col-lg-6">
							<label for="users_password" class="form-label -nHXdi">Password</label>
							<div class="input-group has-validation">
								<input type="password" class="form-control" id="users_password"  placeholder="Password*">
								<div class="invalid-feedback"> </div>
							</div>
						</div>

						<div class="col-lg-6">
							<label for="users_confirmpassword" class="form-label -nHXdi">Confirm Password</label>
							<div class="input-group has-validation">
								<input type="password" class="form-control" id="users_confirmpassword"  placeholder="Confirm*">
								<div class="invalid-feedback"> </div>
							</div>
						</div>

						<div class="col-12">
							<div class="form-check">
								<input onclick="users_password_visibility()" class="form-check-input" type="checkbox" value="" id="users_password_show">
								<label class="form-check-label -nHXdi" for="users_password_show">Show Password</label>
							</div>
						</div>
						<!-- Password / Conf Password  -->


						<!-- firstname / lastname -->
						<div class="col-lg-6">
							<label for="users_firstname" class="form-label -nHXdi">First name</label>
							<div class="input-group has-validation">
								<input type="text" class="form-control" id="users_firstname">
								<div class="invalid-feedback"> </div>
							</div>
						</div>
						<div class="col-lg-6">
							<label for="users_lastname" class="form-label -nHXdi">Last name</label>
							<div class="input-group has-validation">
								<input type="text" class="form-control" id="users_lastname">
								<div class="invalid-feedback"> </div>
							</div>
						</div>
						<!-- firstname / lastname -->





						<!-- Birthdate / Gender -->
						<div class="col-lg-6">
							<label for="users_birthdate" class="form-label -nHXdi">Birthday</label>
							<div class="input-group date has-validation">
								<span class="input-group-text" id="addon-wrapping"><i class="fa fa-calendar" aria-hidden="true"></i></span>
								<input type="text" class="form-control" id="users_birthdate" >
								<div class="invalid-feedback">
								</div>
							</div>
						</div>


						<div class="col-lg-6">
							<label for="users_gender" class="form-label -nHXdi">Gender</label>
							<div class="row">
								<div class="input-group has-validation" id="c-r-c-gender">
									<div class="col">
										<div class="form-check">
											<input class="form-check-input -dLdddI" type="radio" name="users_gender" id="users_male" value="male">
											<label class="form-check-label -nHXdi -cRHiL" for="users_male">Male</label>
										</div>
									</div>
									<div class="col">
										<div class="form-check">
											<input class="form-check-input -dLdddI" type="radio" name="users_gender" id="users_female" value="female">
											<label class="form-check-label -nHXdi -cRHiL" for="users_female">Female</label>
										</div>
									</div>
									<div class="col">
										<div class="form-check">
											<input class="form-check-input -dLdddI" type="radio" name="users_gender" id="users_custom" value="custom">
											<label class="form-check-label -nHXdi -cRHiL" for="users_custom">Custom</label>
										</div>
									</div>
									
								</div>
							</div>
							<div class="invalid-feedback" id="users_genderFeedback">
							</div>
						</div>
						<!-- Birthdate / Gender -->



						


						<!-- Address & Address 2nd -->
						<div class="col-12">
							<label for="users_address" class="form-label -nHXdi">Address</label>
							<div class="input-group has-validation">
								<input type="text" class="form-control" id="users_address" placeholder="1234 Main St">
								<div class="invalid-feedback"> </div>
							</div>
						</div>


						<div class="col-12">
							<label for="users_address2" class="form-label -nHXdi">Address 2 <span class="text-muted">(Optional)</span></label>
							<input type="text" class="form-control" id="users_address2" placeholder="Apartment or suite">
						</div>
						<!-- Address & Address 2nd -->




						<!-- Country / State / Cities / Zip -->
						<div class="col-lg-3">
							<label class="form-label" style="margin-bottom: 0.5rem;">Country</label>
							<select class="form-select" id="users_country" aria-describedby="users_countryFeedback" name="users_country">
								<option value="Choose...">Choose...</option>
								<?php 
								$RESULT = mysqli_query($CONN,"SELECT * FROM `countries`");
								while($ROW = mysqli_fetch_array($RESULT)) { ?>
									<option  value="<?php echo $ROW['country_id'] ?>"><?php echo $ROW['country_name']; ?></option>
								<?php } ?>
							</select>
							<div id="users_countryFeedback" class="invalid-feedback">
								
							</div>
						</div> 




						<div class="col-lg-3">
							<label class="users_state" class="form-label" style="margin-bottom: 0.5rem;">State</label>
							<select class="form-select" id="users_state">
								<option value="">Choose...</option>
							</select>
							<div id="users_state" class="invalid-feedback">
								Please provide a valid city.
							</div>
						</div>
						<div class="col-lg-3">
							<label class="users_cities" class="form-label" style="margin-bottom: 0.5rem;">Cities</label>
							<select class="form-select" id="users_cities">
								<option value="">Choose...</option>
							</select>
							<div id="users_cities" class="invalid-feedback">
								Please provide a valid city.
							</div>
						</div>  
						<div class="col-lg-3">
							<label for="users_zip" class="form-label -nHXdi">Zip</label>
							<div class="input-group has-validation">
								<input type="text" class="form-control" id="users_zip">
								<div id="users_zip" class="invalid-feedback"></div>
							</div>
						</div>


						<!-- Country / State / Cities / Zip -->












						<div class="col-12">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="myCheck">
								<label class="form-check-label" for="myCheck">Agree to terms and conditions</label>
							</div>
						</div>
						<div class="col-12">
							<button class="btn btn-primary" type="submit">Submit form</button>
						</div>
					</form>
				</div>





















			</div>
		</main>
	</div>
</section>

<div class="display-content">
	<div class="message-wrap dn">                      
	</div>
</div>



<script type="text/javascript"> 
	"use strict";


	const registerform   		= document.getElementById('registerform')

	const users_username 		= document.getElementById("users_username")
	const users_email   		= document.getElementById("users_email")
	const users_password 		= document.getElementById("users_password")
	const users_confirmpassword = document.getElementById("users_confirmpassword")
	const users_firstname 		= document.getElementById("users_firstname")
	const users_lastname 		= document.getElementById("users_lastname")
	const users_birthdate 		= document.getElementById("users_birthdate")
	const users_male 			= document.getElementById("users_male")
	const users_female 			= document.getElementById("users_female")
	const users_custom 			= document.getElementById("users_custom")
	const users_address 		= document.getElementById("users_address")
	const users_country 		= document.getElementById("users_country")


	var checkBox 				= document.getElementById("myCheck")

	const errIcon				= "<i class=\"fas fa-times\"></i>"

	// var users_gender 			= document.querySelectorAll('input[name="users_gender"]');
	// var users_gender_row 		= document.getElementsByClassName("users_gender_row")

	const   alpLowNum			= /^[a-z0-9]+$/i
	const   ealpLwNum			= /[a-zA-Z0-9.@]$/
	var 	my_Err_Message
	var 	users_Chckgender
	var 	inserTrequestPhp 	= true

	// function underAgeValidate(birthday){
	// 	// it will accept two types of format yyyy-mm-dd and yyyy/mm/dd
	// 	var optimizedBirthday = birthday.replace(/-/g, "/");
	// 	console.log(optimizedBirthday)
	// 	//set date based on birthday at 01:00:00 hours GMT+0100 (CET)
	// 	var myBirthday = new Date(optimizedBirthday);
	// 	console.log(myBirthday)

	// 	// set current day on 01:00:00 hours GMT+0100 (CET)
	// 	var currentDate = new Date().toJSON().slice(0,10)+' 01:00:00';
	// 	console.log(currentDate)

	// 	// calculate age comparing current date and borthday
	// 	var myAge = ~~((Date.now(currentDate) - myBirthday) / (31557600000));
	// 	console.log(myAge)

	// 	if(myAge < 18) {
	// 		return false;
	// 	}else{
	// 		return true;
	// 	}
	// }

	// function genderState(elemntname) {
	// 	let usGnder = document.getElementsByName('users_gender')
	// 	usGnder.forEach((rate) => {
	// 		if (usGnder.checked) {
	// 			alert(`You rated: ${usGnder.value}`);
	// 		}
	// 	})
	// }

	function users_password_visibility() {
		let users_password_show   = document.getElementById("users_password")
		let users_cfirmpsswd_show = document.getElementById("users_confirmpassword")

		if (users_password_show.type === "password") {
			users_password_show.type   = "text"
			users_cfirmpsswd_show.type = "text"
		} else {
			users_password_show.type   = "password"
			users_cfirmpsswd_show.type = "password"
		}
	}


	registerform.addEventListener('submit', function(e){ 
		// console.log(users_country.value)

		function gDDelmntInputRVlid(geDmk) {
			let dLdddI = document.getElementsByName(geDmk)
			dLdddI.forEach(dLddd => dLddd.classList.remove("is-invalid"))
			dLdddI.forEach(dLddd => dLddd.classList.add("is-valid"))
			document.getElementById("users_genderFeedback").style.display = "none"
			document.getElementById("users_genderFeedback").innerHTML = ""
			inserTrequestPhp = true
		}

		function eRRelmntInputRotten(eRRDmk, my_Err_Message) {
			// users_Tcondition.checked = false;
			let dLdddI = document.getElementsByName(eRRDmk)
			dLdddI.forEach(dLddd => dLddd.classList.remove("is-valid"))
			dLdddI.forEach(dLddd => dLddd.classList.add("is-invalid"))
			document.getElementById("users_genderFeedback").style.display = "block"
			document.getElementById("users_genderFeedback").innerHTML = my_Err_Message
			inserTrequestPhp = false
			e.stopPropagation()
			e.preventDefault()
		}

		function gDD_feedback(my_Element_ID) { 
			// console.log("Goodfeedback")
			let myReferenceDiv = document.getElementById(my_Element_ID)
			myReferenceDiv.classList.remove("is-invalid")
			myReferenceDiv.classList.add("is-valid")
			myReferenceDiv.nextElementSibling.innerHTML = ""
			inserTrequestPhp = true
		}

		function eRRusers_feedback(my_Element_ID, my_Err_Message) { 
			// console.log("Badfeedback")
			// users_Tcondition.checked = false;
			let myReferenceDiv = document.getElementById(my_Element_ID)
			myReferenceDiv.classList.remove("is-valid")
			myReferenceDiv.classList.add("is-invalid")
			myReferenceDiv.nextElementSibling.innerHTML += my_Err_Message + "<br>"
			inserTrequestPhp = false
			e.stopPropagation()
			e.preventDefault()
		}

		// Removing all message RESET
		var ivldfeedback = document.getElementsByClassName("invalid-feedback")

		for (var i = 0; i < ivldfeedback.length; i++) {
			ivldfeedback[i].innerHTML = ""
		}

		// Username
		if (users_username.value.length >= 6 && users_username.value.length <= 30) {
			gDD_feedback("users_username")
		}
		// Email
		if (users_email.value.length >= 6 && users_email.value.length <= 50) {
			gDD_feedback("users_email")
		}
		// Password
		if ((users_password.value.length >= 8 && users_password.value.length <= 100) && (users_password.value == users_confirmpassword.value)) {
			gDD_feedback("users_password")
			gDD_feedback("users_confirmpassword")
		}
		// Firstname
		if (users_firstname.value.length >= 3 && users_firstname.value.length <= 30) {
			gDD_feedback("users_firstname")
		}
		// Lastname
		if (users_lastname.value.length >= 3 && users_lastname.value.length <= 30) {
			gDD_feedback("users_lastname")
		}
		// Birthdate
		if (users_birthdate.value.length) {
			gDD_feedback("users_birthdate")
		}
		// Address
		if (users_address.value.length) {
			gDD_feedback("users_address")
		}
		// Country
		if (users_country.value != "Choose...") {
			gDD_feedback("users_country")
		}
		// Gender
		if (users_male.checked) { 
			gDDelmntInputRVlid("users_gender")
			users_Chckgender = users_male.value
		}else if (users_female.checked) { 
			gDDelmntInputRVlid("users_gender")
			users_Chckgender = users_female.value
		}else if (users_custom.checked) { 
			gDDelmntInputRVlid("users_gender")
			users_Chckgender = users_custom.value
		}else { 	
			my_Err_Message = errIcon + " Please Select Gender" 
			eRRelmntInputRotten("users_gender", my_Err_Message)
		}

		if (users_username.value.length <= 5 || users_username.value.length >= 31) {
			my_Err_Message = errIcon + " Sorry, your username must be between 6 and 30 characters long."
			eRRusers_feedback("users_username", my_Err_Message)
		}
		if(!alpLowNum.test(users_username.value) && !users_username.value == ""){
			my_Err_Message = errIcon + " Sorry, your username can contain only letters, numbers."
			eRRusers_feedback("users_username", my_Err_Message)
		}

		if (users_email.value.length <= 5 || users_email.value.length >= 51) {
			my_Err_Message = errIcon + " Sorry, your email must be between 6 and 50 characters long."
			eRRusers_feedback("users_email", my_Err_Message)
		}
		if(!ealpLwNum.test(users_email.value)){
			my_Err_Message = errIcon + " Sorry, your email can use letters, numbers & periods."
			eRRusers_feedback("users_email", my_Err_Message)
		}

		if (users_password.value.length <= 7 || users_password.value.length >= 101) {
			my_Err_Message = errIcon + " Password at least 8 minimum characters."
			eRRusers_feedback("users_password", my_Err_Message)
			eRRusers_feedback("users_confirmpassword", "")
		}
		if (!users_password.value.match(/[A-Z]/g)) { 
			my_Err_Message = errIcon + " Password at least 1 Uppercase letter."
			eRRusers_feedback("users_password", my_Err_Message)
			eRRusers_feedback("users_confirmpassword", "")
		}
		if (!users_password.value.match(/[a-z]/g)) { 
			my_Err_Message = errIcon + " Password at least 1 Lowercase letter."
			eRRusers_feedback("users_password", my_Err_Message)
			eRRusers_feedback("users_confirmpassword", "")
		}
		if (!users_password.value.match(/[0-9]/g)) {
			my_Err_Message = errIcon + " Password at least 1 Number."
			eRRusers_feedback("users_password", my_Err_Message)
			eRRusers_feedback("users_confirmpassword", "")
		}
		if (!users_password.value.match(/[!@#$%^&*]/g)) {
			my_Err_Message = errIcon + " Password at least 1 Special Character in (eg. '!@#$%^&*')."
			eRRusers_feedback("users_password", my_Err_Message)
			eRRusers_feedback("users_confirmpassword", "")
		}
		if (users_password.value !== users_confirmpassword.value) {
			my_Err_Message = errIcon + " Password and Confirm Password fields value must be matched"
			eRRusers_feedback("users_confirmpassword", my_Err_Message)
		}

		if (users_firstname.value.length <= 2 || users_firstname.value.length >= 31) {
			my_Err_Message = errIcon + " First name at least 3 minimum characters."
			eRRusers_feedback("users_firstname", my_Err_Message)
		}
		if (users_firstname.value.match(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/? 0-9]+/g)) {
			my_Err_Message = errIcon + " First name should only contain letters."
			eRRusers_feedback("users_firstname", my_Err_Message)
		}

		if (users_lastname.value.length <= 2 || users_lastname.value.length >= 31) {
			my_Err_Message = errIcon + " Last name at least 3 minimum characters."
			eRRusers_feedback("users_lastname", my_Err_Message)
		}
		if (users_lastname.value.match(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/? 0-9]+/g)) {
			my_Err_Message = errIcon + " Last name should only contain letters."
			eRRusers_feedback("users_lastname", my_Err_Message)
		}


		if (!users_birthdate.value.length) {
			my_Err_Message = errIcon + " Please select your Birthdate."
			eRRusers_feedback("users_birthdate", my_Err_Message) 
		}

		


		if (!users_address.value.length) { 
			my_Err_Message = errIcon + " Please enter your shipping address."
			eRRusers_feedback("users_address", my_Err_Message) 
		}
		if (users_country.value == "Choose...") {
			my_Err_Message = errIcon + " Please provide a valid country."
			eRRusers_feedback("users_country", my_Err_Message) 
		}



		// console.log(users_username)
		// console.log(users_email)
		// console.log(users_password)
		// console.log(users_firstname)
		// console.log(users_lastname)
		// console.log(users_birthdate)
		// console.log(users_address)
		// console.log(users_Chckgender)

		var us_ue = users_username.value
		var us_el = users_email.value
		var us_pd = users_password.value
		var us_fe = users_firstname.value
		var us_le = users_lastname.value
		var us_be = users_birthdate.value
		var us_as = users_address.value
		var us_cr = users_Chckgender
		var us_cy = users_country.value

		// Terms & condition 
		if (checkBox.checked == true){
			checkBox.checked = false
			// console.log("chck")
			// if (inserTrequestPhp == true) {
				
				// console.log("AJAX")
				$.ajax({
					type:  "POST",
					url:   "insertRegister.php",
					data:  {
						users_username_ajax: 	us_ue,
						users_email_ajax: 		us_el,
						users_password_ajax: 	us_pd,
						users_firstname_ajax: 	us_fe,
						users_lastname_ajax: 	us_le,
						users_birthdate_ajax: 	us_be,
						users_address_ajax: 	us_as,
						users_Chckgender_ajax: 	us_cr,
						users_country_ajax: 	us_cy,				
					},
					cache: false,
					success: function (data) {
						console.log(data)
						// var dataResult = JSON.parse(dataResult);
						// window.alert(data);

						// if (data == "1" ) {
						// 	console.log("Usernmae already exist")
						// }
						// if (data == "0" ) {

						// }
					}
				})
			// }
			e.stopPropagation()
			e.preventDefault()
		} else { 
			e.stopPropagation()
			e.preventDefault()
		}
	})



</script>
<?php include_once('footer.php'); ?>  