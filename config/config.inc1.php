<?php 
// error_reporting(0);
// session_start();
print_r($conn);
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dataadmin"; 

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn) {
	die('Sorry some error in our server');
}