<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<title>Login Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>



<!-- Modal -->

<!-- Header -->
<header class="w3-container w3-theme w3-padding" >
<div class="w3-right">
</a>
	<a href="Home Page.php" class="w3-bar-item w3-button w3-padding-xxlarge w3-black">
    <i class="fa fa-map-marker w3-xxlarge"></i><br>Logout
  </a>
</div>
<br><br>
  <div class="w3-center">
<h1 class="w3-xxxlarge"><span class="w3-hide-small">Lab Management System</span></h1>
  <h2><label>Login Page</label></h2>
  </div>
</header>


    
<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:550px">
  
  <form class="w3-container"  method="post" action="login.php">
  	<?php include('errors.php'); ?>
  <h3>Admin Login</h3>
<img src="adminimage.jpg" alt="Avatar" style="width:65% " class="w3-circle w3-margin-top">
 <table>
<div class="input-group">
  		<label>Username</label>
  		<input class="w3-input w3-border w3-margin-bottom"  placeholder="Enter Username" type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="w3-input w3-border" type="password" placeholder="Enter Password" type="password" name="password">
  	</div>
  	
</table><br>
<center><div class="input-group">
  		<button type="submit" class="w3-button w3-block w3-black w3-section w3-padding" class="btn" name="admin_login">Login</button>
  	</div>
	</form>
<a href="Request Page.php"><button>REQUEST</button></center></a>
	</div>
	
</div>




<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:550px">
  <h3>Student Login</h3>
<img src="Student Profile.jpg" alt="Avatar" style="width:60% " class="w3-circle w3-margin-top">
 <table>
<form class="w3-container"  method="post" action="login.php">
  	<?php include('errors.php'); ?>
<div class="input-group">
  		<label>Username</label>
  		<input class="w3-input w3-border w3-margin-bottom"  placeholder="Enter Username" type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="w3-input w3-border" type="password" placeholder="Enter Password" type="password" name="password">
  	</div>

</table><br>

<center><div class="input-group">
  		<button type="submit" class="w3-button w3-block w3-black w3-section w3-padding" class="btn" name="stu_login">Login</button>
  	</div>
	</form>
<a href="Request Page.php"><button>REQUEST</button></center></a>
	</div>
</div>


<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:550px">
  <h3>Staff Login</h3>
<img src="Staff Profile.jpg" alt="Avatar" style="width:60% " class="w3-circle w3-margin-top">
 <table>
<form class="w3-container"  method="post" action="login.php">
  	<?php include('errors.php'); ?>
<div class="input-group">
  		<label>Username</label>
  		<input class="w3-input w3-border w3-margin-bottom"  placeholder="Enter Username" type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="w3-input w3-border" type="password" placeholder="Enter Password" type="password" name="password">
  	</div>
</table><br>

<center><div class="input-group">
  		<button type="submit" class="w3-button w3-block w3-black w3-section w3-padding" class="btn" name="staff_login">Login</button>
  	</div>
	</form>
<a href="Request Page.php"><button>REQUEST</button></center>
	</div>
</div>
 

</body>
</html>
