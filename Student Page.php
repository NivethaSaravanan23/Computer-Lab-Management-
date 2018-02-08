<?php include('server.php') ?>
<?php
//session_start();
//checking if the person is logged in. If logged in the current username should be logged to the session variable.
/**
if(empty($_SESSION['login']))
{
	header('location:login.php');
}
**/

  
  
$db = mysqli_connect('localhost', 'root', '', 'registration');


if($db)
{ 
	echo "db connectd";
}
else
{
	echo "not connected";
}
// storing session value to a variable.
$session = $_SESSION['username'];

$query= "select * from users where username='".$session."'";

$result = mysqli_query($db,$query);
$value = mysqli_fetch_assoc($result);


?>

<?php
$time_now=mktime(date('h')+4,date('i')+30,date('s'));
$date = date(' h:i', $time_now);
?>


<!DOCTYPE html>
<html>
<title>Student Page</title>
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
<body class="w3-white">
<br><br><br>

<canvas id="canvas" width="200" height="200"></canvas>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

<!-- Icon Bar (Sidebar - hidden on small screens) -->

<div class="w3-top">

	<div class="w3-bar w3-black w3-center w3-card">
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	<a href="Home Page.php" class="w3-bar-item w3-right w3-large w3-button  w3-padding-large  w3-hide-small"><i class="fa fa-map-marker"></i>  Logout</a>   
			</div>     
	

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center w3-large " id="team">
  <div class="w3-panel">
  <b>
    <marquee><h1><b><i>Computer Lab Management System</i></b></h1></marquee>
     </div>


<center><b><label class="w3-white">Student Login</label></b></center><br>
<center>
<table>
    <img src="Student Image.jpg" width="100" height="100">
    
<center><label>Welcome</label></center><br>

<tr> 
<th style="text-align:left" ><label> Username </label></th>
<td><input type="text"  value="<?php echo $value['username']; ?>"></td>
</tr>
								     

<tr>
<th style="text-align:left" ><label>Login Time</label></th>
<td><input type="text" value="<?php echo $date;?>"></td>
</tr>

<tr>
<th style="text-align:left" ><label>Date</label></th>
<td><input type="text" value="<?php
echo date('d-m-Y ');
?>"></td>
</tr>

</table><br> 

</div>
</div>
</html>





