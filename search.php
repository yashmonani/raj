<?php 
  include 'header.php';
 ?>   
	<link rel="stylesheet" type="text/css" href="style.css"> 
	<h1>Showing results for<?php  ?></h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10">
			<div class="card-body">
				<table class="table">
					<thead>
						<!-- <tr>
							<th>P_id</th>
							<th>file1</th>
							<th>addresss</th>
							<th>rating</th>
							<th>price1</th>
						</tr> -->
					</thead>
					<tbody>
						<?php
                          $conn = mysqli_connect("localhost","root","","dataadmin");
                          if(isset($_GET['search']))
                          {
                          	$filtervalues = $_GET['search'];
                          $query = "SELECT * FROM dataadmintbl WHERE CONCAT(file1,addresss) LIKE '%$filtervalues%'";
                          	$query_run = mysqli_query($conn,$query);

                          	if(mysqli_num_rows($query_run) > 0)
                          	{
                          		foreach($query_run as $items)
                          		{
                          			?>
                          			<tr>
							    <!-- <td><?= $items['P_id'];?></td>-->
 <td id="decpic"><img src=" admin/Images/<?php  echo $items['file1'];?>" height="150" width="100%" margin-top="100px"></td>
							    <td><?= $items['addresss'];?></td>
							    <td id="rating1"><?= $items['rating'];?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></td>
							    <td><?= $items['price1'];?>/-</td>
							    <td><div class="col-md-2">
			<?php 
			if(empty($_SESSION['USER_SESSION'])){
				?>
				<a href="signup.php" class="anc"><button class="btn btn-danger">View Details</button></a>

			<?php }else{?>
				<a href="booking.php?pgid=<?php echo $items['P_id'];?>" class="anc"><button class="btn btn-danger">View Details</button>	</a>
			<?php } ?>
			
			
		</div></td>
				        </tr>

                          			<?php

                          		}

                          	}
                          	else
                          	{	
                          		?>
                               <tr>
							    <td colspan="4">Nothing found!</td>
							 </tr>
                          		<?php
                          	}
                          }
                           ?> 

						    
					</tbody>

				</table>
			</div>
		</div>
		
	</div>
</div>