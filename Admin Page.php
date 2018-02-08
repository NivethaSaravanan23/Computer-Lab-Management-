<!DOCTYPE html>
<html>
<title>Admin Page</title>
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
	background-image:url("wood.jpg");
}

</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->

<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  
  
  <a href="#" class="w3-bar-item w3-button w3-padding-xxlarge w3-black">
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


<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-10 w3-center " id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Welcome</span> Admin.</h1>
    <p> Admin Panel.</p>
    <!-- <img src="C:\xampp\htdocs\lab management\adminimage.jpg" alt="boy" class="w3-image" width="350" height="350"><br><br>
	<img src="C:\xampp\htdocs\lab management\Admin.jpg" alt="boy" class="w3-image" width="400" height="400">
  </header>
  </div>
  <!-- End of Header Home-->
    
</body>
</html>
 
 


 

