<?php
include('header.php');
?>
<!DOCTYPE html>
<html> 
<head>   
	<title>Pgwala</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymou">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="project/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section class="h-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
            	<img src="img/logo.png" class="image1">
              <img src="img/pic2.jpg "  class="image2">
              <img src="img/mess.jpg" class="image3">
              <img src="img/pg.jpeg" class="image4">   
            </div>
            <!--  -->
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Registration form</h3>
<form method="post" action="Controllor/register.php">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    
                    <div class="form-outline">
                      <input type="text"  required id="form3Example1m" name="fname" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n"   required name="lname" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m1" required name="mothersname" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m1">Mother's name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n1" required="" name="fathersname" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n1">Father's name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" required name="address" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2" >

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                  
                    <input class="form-check-input" type="radio"  name="gender" id="femaleGender"
                      value="Female" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="Male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="Other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select form-control"  required name="state">
                      <option value="1">State</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">

                    <select class="select form-control" required name="city">
                      <option value="1">City</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>
 
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="date" id="form3Example9" required class="form-control form-control-lg" name="dob" />
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example90" required class="form-control form-control-lg" name="pincode" />
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" required class="form-control form-control-lg" name="education" />
                  <label class="form-label" for="form3Example99">Highest Education Completed</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" required class="form-control form-control-lg" name="email" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example97"  required class="form-control form-control-lg" name="psw" />
                  <label class="form-label" for="form3Example97">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example97"  required="" class="form-control form-control-lg" name="cpsw" />
                  <label class="form-label" for="form3Example97">Confirm Password</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2" name="submit">Submit form</button>
                </div>
</form>
              </div>
            </div>
         <!--   -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <?php 
    if($_SESSION['error'] !== '') { ?>
      <div class="alert alert-danger">
        <?php echo $_SESSION['error'];?>
      </div>
    <?php } $_SESSION['error'] ='';?>

    <?php 
    if($_SESSION['success'] !== '') { ?>
      <div class="alert alert-success">
        <?php echo $_SESSION['success'];?>
      </div>
    <?php } $_SESSION['success'] ='';?>

</body>
</html>