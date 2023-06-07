<?php
include('header.php');
$user_session=$_SESSION['USER_SESSION'];
if(isset($user_session) && !empty($user_session)){
$fet = mysqli_query($conn, "SELECT * FROM register WHERE email ='$user_session'");
$record = mysqli_fetch_array($fet);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<section>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="headacc1">
			<h2 class="head2">Account Details</h2>
		</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</section>
</body>
</html>