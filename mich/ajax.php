<?php include_once('../db_connection.php'); ?>

<?php 

if (isset($_POST['id'])) {
	$id=$_POST['id'];

	$RESULT = mysqli_query($CONN,"SELECT * FROM `states` WHERE `country_id` = ".$id."");
	while ($row=mysqli_fetch_array($RESULT)) {
		$id=$row['state_id'];
		$state=$row['state_name'];
		echo "<option value='$id'>$state</option>";
	}
}

if (isset($_POST['stateID'])) {
	$stateID=$_POST['stateID'];

	$RESULT = mysqli_query($CONN,"SELECT * FROM `cities` WHERE `state_id` = ".$stateID."");
	while ($row=mysqli_fetch_array($RESULT)) {
		$id=$row['city_id'];
		$city=$row['city_name'];
		echo "<option value='$id'>$city</option>";
	}
}

?>