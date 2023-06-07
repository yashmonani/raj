<?php
include('config/config.inc.php');
$user_session=$_SESSION['USER_SESSION'];
if(isset($user_session) && !empty($user_session)){
$fet = mysqli_query($conn, "SELECT * FROM register WHERE email ='$user_session'");
$record = mysqli_fetch_array($fet);
}    
?>  
<!DOCTYPE html> 
<html>
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- bootstrap library start -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" type="text/css" href="responsive.css"> -->
	<!-- bootstrap library end -->
	<link rel="stylesheet" type="text/css" href="style.css"> 
     <script type="text/javascript" src="js/mdb.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<section>
	<div class="container-fluid">
		<div class="header">
			<div class="row">
				<div class="col-md-3">
					<img src="img/logo.png" class="logo1">
				</div>
				<div class="col-md-6">
					<nav class="navbar navbar-expand-md">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="index.php" class="nav-link">Home</a>
							</li>
							<li class="nav-item">
								<a href="partnerus.php" class="nav-link">Partner Us</a>
							</li>
							<li class="nav-item">
								<a href="Book Now.php" class="nav-link">Book Now</a>
							</li> 
						</ul>
						<div id="menu-btn" class="fa fa-bars"></div>
					</nav>

				</div>

				<div class="col-md-3">
					<?php
							if(empty($_SESSION['USER_SESSION'])){
						    ?>
					<a href=""  data-bs-toggle="modal" data-bs-target="#myModal">
					<button type="button" class="btn btn-link">Login</button>
				</a>
				<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="Controllor/register.php">
		<div class="row">
	<div class="btn3">
				<div class="form-group">
					<label>Email Id:</label>
					<input type="text" name="email" placeholder="enter your email" class="form-control">
				</div>
						<div class="form-group">
					<label>Password</label>
					<input type="Password" name="psw" placeholder="Please enter your password" class="form-control">
				</div>
				<button type="submit" class="btn btn-success" name="login">Login</button>
				</div>	
		</div>
	</form>
	<p id="or">Or</p>
      
      <!-- Modal footer -->
      
      	<a href="signup.php"><button class="btn btn-warning">Create account</button></a>
        </div>
      </div>
    </div>
			</div>
		</div>
		<?php }else{?>
			<div class="iconset2">
                 <a href="acc_details.php"><i class="fa fa-user-circle"></i></a> 
                 <div class="icon2">
                    <a href="logout.php"><i class="fa fa-sign-out"></i></a>
                    </div>

                                    </div>
											<?php }?>

	</div>
	<!-- <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    <i class="fa fa-user-circle">
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Link 1</a></li>
    <li><a class="dropdown-item" href="#">Link 2</a></li>
    <li><a class="dropdown-item" href="#">Link 3</a></li>
  </ul>
</div> -->

</div>
</div>
</section>
</body>
</html>


