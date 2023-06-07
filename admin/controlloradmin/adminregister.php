<?php 
include('../configadmin/config.inc1.php');
if(isset($_REQUEST['submitadmin']) == 'submitadmin'){
	$P_id = rand(00000,99999);
$address = $_REQUEST['address'];
$number = $_REQUEST['rating'];
$price = $_REQUEST['price'];
if(!empty($address) && !empty($number) && !empty($price)) {
		$target_path = "../Images/";
		$target_path = $target_path.basename($_FILES['images']['name']);
		print_r($_FILES['images']['tmp_name']);
		
		if(move_uploaded_file($_FILES['images']['tmp_name'], $target_path)) {
			$sql = "INSERT INTO dataadmintbl (P_id,file1,addresss,rating,price1) VALUES('$P_id','$target_path','$address','$number','$price')";
			mysqli_query($conn, $sql);
		header("location:http://localhost/project/admin/admin.php");	
	}else{
		$_SESSION['error']= 'your file is not uploaded';
	//\header("location:http://localhost/project/admin/admin.php");
	}
}
else{
	$_SESSION['error']= 'Please fill blank fields';
	header("location:http://localhost/project/admin/admin.php");

}
}

?>