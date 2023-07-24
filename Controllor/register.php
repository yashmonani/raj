<?php
include_once('../config/config.inc.php'); 
if(isset($_REQUEST['submit']) == 'submit') {
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$mothersname = $_REQUEST['mothersname'];
	$fathersname = $_REQUEST['fathersname'];
	$address = $_REQUEST['address'];
	$gender = $_REQUEST['gender'];
	$state = $_REQUEST['state'];
	$city = $_REQUEST['city'];
	$dob = $_REQUEST['dob'];
	$pincode = $_REQUEST['pincode'];
	$education = $_REQUEST['education'];
	$email = $_REQUEST['email'];
	$psw = $_REQUEST['psw'];
	$cpsw = $_REQUEST['cpsw'];

	if(!empty($fname) && !empty($lname) && !empty($email) && !empty($address) && !empty($mothersname) && !empty($fathersname) && !empty($address) && !empty($gender) && !empty($state) && !empty($city) && !empty($dob) && !empty($pincode) && !empty($education) && !empty($email) && !empty($psw) && !empty($cpsw)){
		$dup = mysqli_query($conn, "SELECT * FROM register WHERE email='$email'");
		if(mysqli_num_rows($dup)>0) {
			$_SESSION['error'] ='You are already registered in our software';
		header("location:http://localhost/project/index.php");
						}else{
				$sql = "INSERT INTO register (fname, lname, mothersname, fathersname, address, gender, state,city, dob, pincode, education,email, psw,cpsw) VALUES('$fname', '$lname', '$mothersname', '$fathersname', '$address','$gender', '$state', '$city', '$dob', '$pincode', '$education', '$email', '$psw','$cpsw')";
			mysqli_query($conn, $sql);
			print_r($conn);
		$_SESSION['success'] ='Thank you: Your registration are successfully';
		header("location:http://localhost/project/signup.php");	
	}
}
else{
	$_SESSION['error']= 'Please fill blank fields';
	header("location:http://localhost/project/index.php");
}
}
elseif(isset($_REQUEST['login']) == 'login'){
		$email = trim($_REQUEST['email']);
		$psw = trim($_REQUEST['psw']);
		if(!empty($email) && !empty($psw)) {
			$fetch = mysqli_query($conn , "SELECT * FROM register WHERE email = '$email' LIMIT 1");
			$data = mysqli_fetch_array($fetch);
			if($email == $data['email'] && $psw == $data['psw']){
				$_SESSION['USER_SESSION'] = $email;
				header("location:http://localhost/project/index.php");
			}else{
				$_SESSION['error'] = 'Your Email id & password invalid';
				header("location:http://localhost/project/index.php");
			}
		}else{
            $_SESSION['error'] = 'Please fill the blank input';
            header("location:http://localhost/project/index.php");
		}
	}

?>