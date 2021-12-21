<?php  
include_once("../db_connection.php");

if (isset($_POST['users_username_ajax']) && isset($_POST['users_email_ajax']) && isset($_POST['users_password_ajax']) && isset($_POST['users_firstname_ajax']) && isset($_POST['users_lastname_ajax']) && isset($_POST['users_birthdate_ajax'])) {
	$users_username_ajax 	= $_POST['users_username_ajax'];
	$users_email_ajax 		= $_POST['users_email_ajax'];
	$users_password_ajax 	= $_POST['users_password_ajax'];

	$users_firstname_ajax 	= $_POST['users_firstname_ajax'];
	$users_lastname_ajax 	= $_POST['users_lastname_ajax'];
	$users_birthdate_ajax 	= $_POST['users_birthdate_ajax'];

	$users_address_ajax 	= $_POST['users_address_ajax'];
	$users_Chckgender_ajax 	= $_POST['users_Chckgender_ajax'];
	$users_country_ajax 	= $_POST['users_country_ajax'];



	$users_username_ajax 		= mysqli_real_escape_string($CONN, $users_username_ajax);
	$users_username_ajax 		= htmlspecialchars($users_username_ajax, ENT_QUOTES, "UTF-8");

	$users_email_ajax 			= mysqli_real_escape_string($CONN, $users_email_ajax);
	$users_email_ajax 			= htmlspecialchars($users_email_ajax, ENT_QUOTES, "UTF-8");

	$users_password_ajax 		= mysqli_real_escape_string($CONN, $users_password_ajax);
	$users_password_ajax 		= htmlspecialchars($users_password_ajax, ENT_QUOTES, "UTF-8");

	

	$users_firstname_ajax 		= mysqli_real_escape_string($CONN, $users_firstname_ajax);
	$users_firstname_ajax 		= htmlspecialchars($users_firstname_ajax, ENT_QUOTES, "UTF-8");

	$users_lastname_ajax 		= mysqli_real_escape_string($CONN, $users_lastname_ajax);
	$users_lastname_ajax 		= htmlspecialchars($users_lastname_ajax, ENT_QUOTES, "UTF-8");

	$users_birthdate_ajax 		= mysqli_real_escape_string($CONN, $users_birthdate_ajax);
	$users_birthdate_ajax 		= htmlspecialchars($users_birthdate_ajax, ENT_QUOTES, "UTF-8");

	

	$users_address_ajax 		= mysqli_real_escape_string($CONN, $users_address_ajax);
	$users_address_ajax 		= htmlspecialchars($users_address_ajax, ENT_QUOTES, "UTF-8");

	$users_Chckgender_ajax 		= mysqli_real_escape_string($CONN, $users_Chckgender_ajax);
	$users_Chckgender_ajax 		= htmlspecialchars($users_Chckgender_ajax, ENT_QUOTES, "UTF-8");

	$users_country_ajax 		= mysqli_real_escape_string($CONN, $users_country_ajax);
	$users_country_ajax 		= htmlspecialchars($users_country_ajax, ENT_QUOTES, "UTF-8");

	
	$users_username_validation  = mysqli_query($CONN, "SELECT * FROM `customers` WHERE name = '" . $users_username_ajax . "'");
	$users_email_validation     = mysqli_query($CONN, "SELECT * FROM `customers` WHERE email = '" . $users_email_ajax . "'");
	
	$users_username_count 		= mysqli_num_rows($users_username_validation);
	$users_email_count  		= mysqli_num_rows($users_email_validation);

	if(!($users_username_count >= 0)){
		echo "1";
	}

	// if($users_email_count > 0){
	// 	echo "0";
	// }

 
}
?>