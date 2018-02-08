<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

body{
	background-image:url("m.jpg");
}

</style>
</head>
<body class="w3-dark-white">

<!-- Icon Bar (Sidebar - hidden on small screens) -->

<nav class="w3-sidebar w3-black w3-bar-block w3-small w3-hide-small w3-center">
  
<a href="Admin Page.php" class="w3-bar-item w3-button w3-padding-xxlarge w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
<br>HOME
  </a>
  <a href="Add User.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <br><i class="fa fa-user w3-xxlarge"></i>
    ADD USER</a>
		
  <a href="findandedit.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <br><i class="fa fa-pencil w3-xxlarge"></i>
   FIND/EDIT USER
  </a>
  
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <br><i class="fa fa-trash w3-xxlarge"></i>
   DELETE USER
	</a>
	
	
	<a href="showall.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <br><i class="fa fa-file w3-xxlarge"></i>
    SHOW ALL USERS
	</a>
	
	
	<a href="Home Page.php" class="w3-bar-item w3-button w3-padding-xxlarge w3-black">
    <i class="fa fa-map-marker w3-xxlarge"></i>
    <br>Logout
  </a>	
	
	
<div class="w3-padding-large" id="main">

  </nav>


<div class="w3-container w3-padding w3-center" id="team">
  <div class="w3-panel">
    <marquee><h1><b><i>Computer Lab Management System</i></b></h1></marquee>
     </div>

 <form class="w3-container"  method="post" action="Add User.php">
  	<?php include('errors.php'); ?>

<div class="w3-large w3-padding-large w3-text-white"  id="main">
<b>
<center><b><label>Add User</label></b></center><br>

<center>
<table>
<center><img src="Add User.png" width="100" height="100"></center><br><br>
 

 
<tr>
<th style="text-align:left"><label> Username </label></th>
<td><input type="text" name="username"></td>
</tr>

<tr>
<th style="text-align:left"><label> Password </label></th>
<td><input type="password" name="password"></td>
</tr>

<tr>
<th style="text-align:left"><label> Class </label></th>
<td><input type="text" name="dept"></td>                                
</tr>


<tr>
<th style="text-align:left"><label name="gender">Gender</label></th>
<td><input type="radio" name="gender" value="Male">Male</td>
<td><input type="radio" name="gender" value="Female">Female</td>
</tr> 

<tr>
<th style="text-align:left"><label name="email"> Mail-Id </label></th>
<td><input type="text" name="email"></td>
</tr> 

<tr>
<th style="text-align:left"><label name="category">Category</label></th>
<td><input type="checkbox" name="category" value="Staff">Staff</td>
<td><input type="checkbox" name="category" value="Student">Student</td>
</tr>

</center>
</table>

<center>
<button type="submit" class="w3-button w3-block w3-black w3-section w3-padding" class="btn" name="add_user">SAVE</button>
</b>
</center> 
 
</body> 
</html>



