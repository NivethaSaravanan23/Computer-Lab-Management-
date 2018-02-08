
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `username`, `email`) LIKE '%".$valueToSearch."%'";
    $search_result = findandeditTable($query);
    
}
 else {
    $query = "SELECT * FROM users where username=' none'";
    $search_result = findandeditTable($query);
}


// function to connect and execute the query
function findandeditTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "registration");
    $findandedit_Result = mysqli_query($connect, $query);
    return $findandedit_Result;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Find/Edit</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
	background-image:url("n.jpg");
}


#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: black;}

#customers tr:hover {background-color: black;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: black;
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
  
  
<div class="w3-large w3-padding-large"  id="main">
<b>
<h1 class="w3-xxxlarge w3-text-white w3-center"><b>Find/Edit User</b></h1><br>
	
<center><img src="Edit User.png" width="100" height="100"></center><br><br>
 


  <body>  
    <body>
        
        <form action="findandedit.php" method="post">
		<center>
            <input type="text" class="w3-black w3-center"name="valueToSearch" placeholder="Enter Username"><br><br>
            <input type="submit" class="w3-button w3-black" name="search" value="Search"><br><br>
  </center>
  <table id="customers" class="table w3-text-white">
    <thead>
      <tr>
        <th>Username</th>
        <th>Password</th>
		<th>Class</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
	 //$session = $_SESSION['username'];
  
          while($row  = mysqli_fetch_array($search_result)){ ?>
              <tr id="<?php echo $row['id']; ?>">
                <td data-target="username"><?php echo $row['username']; ?></td>        
                <td data-target="password"><?php echo $row['password']; ?></td>
				<td data-target="dept"><?php echo $row['dept']; ?></td>
				<td data-target="gender"><?php echo $row['gender']; ?></td>
				<td data-target="email"><?php echo $row['email']; ?></td>
				<td data-target="category"><?php echo $row['category']; ?></td>
                <td><a href="#" data-role="update" data-id="<?php echo $row['id'] ;?>">Update</a></td>
              </tr>
         <?php }
       ?>  
    </tbody>
  </table>
</body>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
     <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Username</label>
                <input type="text" id="username" class="form-control">
              </div>
			  <div class="form-group">
                <label>Password</label>
                <input type="text" id="password" class="form-control">
              </div>
              <div class="form-group">
                <label>Class</label>
                <input type="text" id="dept" class="form-control">
              </div>
			  <div class="form-group">
                <label>gender</label>
                <input type="text" id="gender" class="form-control">
              </div>
			  <div class="form-group">
                <label>email</label>
                <input type="text" id="email" class="form-control">
              </div>
			  <div class="form-group">
                <label>category</label>
                <input type="text" id="category" class="form-control">
              </div>

               
                <input type="hidden" id="userId" class="form-control">


          </div>
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

</body>
<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var username  = $('#'+id).children('td[data-target=username]').text();
            var password  = $('#'+id).children('td[data-target=password]').text();
			var dept  = $('#'+id).children('td[data-target=dept]').text();
            var gender  = $('#'+id).children('td[data-target=gender]').text();
			var email  = $('#'+id).children('td[data-target=email]').text();
			var category  = $('#'+id).children('td[data-target=category]').text();

            $('#username').val(username);
			$('#password').val(password);	
            $('#dept').val(dept);
			$('#gender').val(gender);
			$('#email').val(email);
			$('#category').val(category);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
          var id  = $('#userId').val(); 
         var username =  $('#username').val();
		 var password =  $('#password').val();
          var dept =  $('#dept').val();
		  var gender =  $('#gender').val();
		  var email =  $('#email').val();
		  var category =  $('#category').val();
          

          $.ajax({
              url      : 'connection.php',
              method   : 'post', 
              data     : {username : username , password : password , dept : dept, gender : gender  
			  , email : email , category : category , id: id},
              success  : function(response){
                            // now update user record in table 
                             $('#'+id).children('td[data-target=username]').text(username);
                             $('#'+id).children('td[data-target=password]').text(password);
							 $('#'+id).children('td[data-target=dept]').text(dept);
							 $('#'+id).children('td[data-target=gender]').text(gender);
							 $('#'+id).children('td[data-target=email]').text(email);
							 $('#'+id).children('td[data-target=category]').text(category);
                 
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
  });
</script>

</html>
