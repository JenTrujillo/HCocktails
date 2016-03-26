<?php
$db_name = "db_healthycocktails"; //Database name variable
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
if($conn){
	echo "Connection Successful!";
}
else {
	echo "Connection is not successful".mysqli_connect_error();
}
?>