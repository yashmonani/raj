<?php 
include("header.php");

$pid = $_GET['pgid'];
$book = mysqli_query($conn, "SELECT * FROM dataadmintbl WHERE P_id ='$pid'");
$booking = mysqli_fetch_array($book);

?>  

<div class="container">
<div class="size">
<div class="row">
<div class="col-md-5">
	<td><img src=" admin/Images/<?php  echo $booking['file1'];?>" height="150" width="100%"></td>
</div>
<div class="col-md-7">
<div class="card">
<table class="table">
 <p id="in1">Pg details: <tr><?php echo $booking['addresss'];?></tr></p> 
 <p id="in2">Room :</p><p id="in3">Available</p><i class="fa fa-check-circle"></i>
 <p id="in4">Rating: <tr><?php echo $booking['rating'];?></tr></p>
 <p id="in4">Room details: </p>
 <p id="in5">Please select number of person:</p>
  
    
  
<input type="radio" id="gender" name="gender"> 1
<input type="radio" id="gender" name="gender">2  
<input type="radio" id="gender" name="gender">3
   <p id="in6">Price:(Monthly) <tr><?php echo $booking['price1'];?>/-</tr></p> 
<p id="in7">*For any room regarding query : +91 97732636728</p>
</table>
</div>
</div>
</div>
</div>
<a href=""><button class="btn btn-success" name="finalbtn">Book now</button></a>

</div>