<?php
include_once('configadmin/config.inc1.php');

?> 
<!DOCTYPE html>
<html>
<head>    
	<title>Admin Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	
	<!-- bootstrap library end -->
	<link rel="stylesheet" type="text/css" href="styleadmin.css"> 
	<script type="text/javascript" src="js/style.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<form method="post" action="controlloradmin/adminregister.php" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-3">
			<div class="file">
		<input type="file" name="images">
            </div> 
	    </div>
	<div class="col-md-3">
		<div class="addre">
			<textarea name="address" placeholder="Please enter your address"></textarea>
		</div>
	</div>
	<div class="col-md-3">
		<div class="rating">
			<input type="float" name="rating" placeholder="Enter rating out 5">
		</div>
		
	</div>
	<div class="col-md-3">
		<div class="price">
			<textarea name="price" placeholder="Enter cost(-/month)"></textarea>
		</div>
	</div>
<button type="submit" class="btn btn-warning btn-sm ms-2" name="submitadmin">Submit form</button>
    </div>
</form>
<table class="table table-bordered">
	<thead>
		<th>P_id</th>
		<th>PgImage</th>
		<th>Address</th>
		<th>Rating</th>
		<th>Price</th>
	</thead>
	<tbody>
		<?php
		$select_products = mysqli_query($conn, "SELECT * FROM dataadmintbl");
		if(mysqli_num_rows($select_products)>0){
			while ($row = mysqli_fetch_assoc($select_products)) {
				?>
				<tr>
					<td><?php echo $row['P_id']; ?></td>
				<td><img src=" admin/<?php  echo $row['file1'];?>" height="100" alt=""></td>
				<td><?php echo $row['addresss']; ?></td>
				<td><?php echo $row['rating']; ?></td>
				<td><i class="fa fa-inr"></i><?php echo $row['price1']; ?>/-</td>
			</tr>
			<?php
			}
		}else{
			echo"<div class='empty'>no product added</div>";
		}
		?>
	</tbody>
</table>
</body>
</html>