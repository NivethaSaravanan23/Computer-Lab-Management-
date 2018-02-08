<?php
session_start();

// variable declaration
/**$adminname = "adminname";
$adminpassword = "adminpassword";**/
$username = "username";
$password = "password";
$dept = "dept";
$gender = "gender";
$email = "email";
$category = "category";
$login_time = "login_time ";
$logout_time= "logout_time";

$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'registration');

/**   Edit_user
  
  if (isset($_POST['Edit_user'])) {
  // receive all input values from the form
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $d_o_b = mysqli_real_escape_string($db, $_POST['d_o_b']);  
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);  
  $address = mysqli_real_escape_string($db, $_POST['address']);  
  
	
  // register user if there are no errors in the form
  if (count($errors) == 0) {
  
  	$query = "UPDATE `users` SET `username`=[value-4],`email`=[value-5],`blood_group`=[value-7],`d_o_b`=[value-8],`age`=[value-9],`gender`=[value-10],`mobile`=[value-11],`address`=[value-12] WHERE 1";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	//header('location: customerpage.php');
  }

  **/

if (isset($_POST['stu_login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
	  $_SESSION['password'] = $password;
	  
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: Student Page.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  
}


if (isset($_POST['staff_login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
	  $_SESSION['password'] = $password;
	  
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: Staff Page.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  
}


if (isset($_POST['admin_login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
	  $_SESSION['password'] = $password;
	  
  	  $_SESSION['success'] = "You are now logged in"; 
  	  header('location: Admin Page.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  
}

if (isset($_POST['add_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $dept = mysqli_real_escape_string($db, $_POST['dept']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $email =  mysqli_real_escape_string($db, $_POST['email']);
  $category = mysqli_real_escape_string($db, $_POST['category']);
  
  
  // form validation: ensure that the form is correctly filled
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($dept)) { array_push($errors, "Class is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($category)) { array_push($errors, "Category is required"); }
  
  
  //if ($password!= $password) {
  //array_push($errors, "The two passwords do not match"); }
	
  // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password;//encrypt the password before saving in the database
  	$query = "INSERT INTO users (username, password, dept, gender, email, category) 
  			  VALUES('$username','$password','$dept','$gender','$email','$category')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: Add User.php');
  }

}  



if (isset($_POST['edit_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  

  if (count($errors) == 0) {
  
  	$query = "SELECT * FROM users WHERE username='$username'";
  	$results = mysqli_query($db, $query);
		
  }
  
}




/**
if (isset($_POST['delete'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Username is required");
  }

  if (count($errors) == 0) {
  
  	$query = "DELETE * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
		
  }
  
}**/

if (isset($_POST['delete'])) {
  
  
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  $sql="DELETE FROM  users WHERE username=$username AND password=$password";
  if($db->query($sql)=== TRUE){
	  echo "Record deleted successfully";
  }
  else{
	  echo "Error in deleting records".$db->error;
  }
  
  	}
  



?>