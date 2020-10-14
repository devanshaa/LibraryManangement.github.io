<?php 
session_start();

require 'database.php';
if (!isset($_SESSION['username_s'])) {
	echo("<script>alert('PLEASE LOGIN FIRST..!')</script>");

	header("Location:confirm.php");
	# code...
}

if(isset($_GET['f']))
{
	header("Refresh:0.1;url=change.php");
	 echo '<script type="text/javascript">alert("CONGRULATIONS YOU HAVE SUCCESSFULLY CHANGED YOUR PASSWORD")</script>';

}
elseif (isset($_GET['g'])) {
	header("Refresh:0.1;url=change.php");
	 echo '<script type="text/javascript">alert("DATA NOT UPDATED")</script>';

}
elseif (isset($_GET['h'])) {
	header("Refresh:0.1;url=change.php");
	 echo '<script type="text/javascript">alert("ID DOES NOT EXISTS")</script>';

}
elseif (isset($_GET['i'])) {
	header("Refresh:0.1;url=change.php");
	 echo '<script type="text/javascript">alert("PASSWORD AND CONFIRM PASSWORD DOES NOT MATCH")</script>';

}
elseif (isset($_GET['b'])) {
	header("Refresh:0.1;url=change.php");
	 echo '<script type="text/javascript">alert("CURRENT PASSWORD DOES NOT MATCH")</script>';

}





 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Change Student Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,intitial-scale=1">
	<style>
		body
	 	{
	 		width:1536px;
	 		height: 762px;
	 	}
		a
		{
			color: white;
			font-family: candara;
			font-size: 20px;
			line-height:20px;
			font-weight: bold;
		}
		li
		{
			text-decoration: none;
			display: inline-block;
		}
		ul{
			word-spacing: 10px;
		}
		footer
		{
			width: 1536px;
			height: 85px;
			background-color: black;
		}
		.bookmenu
		{
			width: 1536px;
			height: 577px;
			color: white;
			background-color: none;
		}
	
	</style>
</head> 
<body>
	<header style="width: 1536px; height: 100px; background-color: black;">
		<h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		<nav class="list-group list-group-horizontal " style="float: right;">
			
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="studentrights.php">BACK</a></li>
		</nav>	
	</header>
	<section style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/stdlogin1.jpg);">
		<br><br><br>
				<div style="height: 500px; width: 400px; position: absolute; right: 570px; background-color: rgba(195,202,212,0.5); border-radius: 20px;">

							<h2 style="color:white; font-family: candara;font-weight: bold; text-align: center;">CHANGE PASSWORD :</h2>
		<hr color="white" width="400" length="20">


	
	<form action="change1.php" method="post">                 <br><br>

           <!--<div class="form-group" style="color:black;text-align: center;font-size: 20px; font-weight: bold;" >
          
           <label for="inputEmail4">Student ID :</label>
           <input type="text" class="form-control" name="id" style="width: 300px; margin: 0 auto;" id="inputEmail4" placeholder="Enter your Id" required>
           
           </div>-->
           <div class="form-group" style="text-align: center; font-weight: bold; color:white;font-size: 20px;">
          <label for="opassword" translate="">OLD PASSWORD :</label><br>
          <input type="password" class="form-control" style="width: 300px; margin: 0 auto;" name="opassword" id="opassword" placeholder="Enter your old password" required>
          </div>
          <div class="form-group" style="text-align: center; font-weight: bold;  color:white;font-size: 20px;">
          <label for="newpassword" translate="">NEW PASSWORD :</label><br>
          <input type="password" class="form-control" style="width: 300px; margin: 0 auto;" name="newpassword" id="newpassword" placeholder="Enter your new password" required>
          </div>
          <div class="form-group" style="color:black;text-align: center;font-size: 20px;  color:white;font-weight: bold;">
          <label for="cpassword">CONFIRM PASSWORD:</label>
          <input type="password" class="form-control" name="cpassword" id="cpassword" style="width: 300px; margin: 0 auto;" placeholder="Confirm your password" required>
          </div>
          <br><div style="text-align: center;">      

          <button name="change" type="submit" class="btn btn-success"><b><i>Update Password</i></b></button>             
		</div>
	</form></div>
    </section>
	
	<footer>
		<p style="color: white;text-align: center;font-size: 20px;font-family: Candara;">
				Website:&nbsp www.invertisuniversity.ac.in <br>
				WhatsApp no:&nbsp 9690955599
		</p>
		
	</footer>


</body>
</html>