<?php
$host = '127.0.0.1:49269';
$username = 'azure';
$password = '6#vWHD_$';
$db_name = 'localdb';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
