<?php
require 'db.php';
$sql = 'SELECT * FROM users';
$statement = $connection->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<!doctype html>
<html lang="en">
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
	background-image:url("delete.jpg");
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
  
  <a href="index
  .php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
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


  </nav>

  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta username="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  
<div class="container w3-black">
  <div class="card mt-5 w3-black">
    <div class="card-header w3-black">
      <h2>All users</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          
          <th>username</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
        <?php foreach($users as $person): ?>
          <tr>
          
            <td><?= $person->username; ?></td>
            <td><?= $person->email; ?></td>
            <td>
              <!--<a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>-->
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="index.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM users WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
//  header("Location: index.php");
  
}
?>