<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "bootstrapshope";

$CONN = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$CONN) {
   die("Connection failed: " . mysqli_connect_error());
   echo "Connection failed";
} 
?>