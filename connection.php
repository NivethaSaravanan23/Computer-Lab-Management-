<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'registration');




if(isset($_POST['password'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$dept = $_POST['dept'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$category = $_POST['category'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE users SET username='$username' , password='$password' , dept='$dept'
, gender='$gender', email='$email', category='$category' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>