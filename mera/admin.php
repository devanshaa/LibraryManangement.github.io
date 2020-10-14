<?php 
session_start();
require 'database.php'; 
if(isset($_GET['g']))
{
	header("Refresh:0.1;url=admin.php");
	//echo 'login successully';
	echo("<script>alert('LOGIN SUCCESSFULLY..')</script>");
	//window.location.reload();

}

if (!isset($_SESSION['username_a'])) {
	echo("<script>alert('PLEASE LOGIN FIRST..!')</script>");

	header("Location:confirmadmin.php");
	# code...
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Admin Rights
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,intitial-scale=1">
	<style>
		body
	 	{
	 		width:1536px;
	 		height: 762px;
	 	}
	 	li
		{
			text-decoration: none;
			display: inline-block;
		}
		ul{
			word-spacing: 10px;
		}
		a
		{
			color: white;
			font-family: candara;
			font-size: 20px;
			line-height:20px;
			font-weight: bold;
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
			background-color: none;
		}
		.box{
			width: 420px;
			height: 470px;
			background-color: none;
			transform: translate(550px,10px);
			border:2px solid white;
			border-radius: 10px;

		}
	</style>
</head>
<body>
	<header  style="width: 1536px; height: 100px; background-color: black;">
		<h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		<nav class="list-group list-group-horizontal " style="float: right;">
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="adminlogout.php">HOME</a></li>
			<li class="list-group-item list-group-item-link active " style="background-color: black;"><a href="admin.php">ADMIN</a></li>
			
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="adminlogout.php">LOGOUT</a></li>
		</nav>
		
	</header>

	<section style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/admin1.jpg);">
		<h1 style="font-family: candara; text-align: center; font-weight: bold; color: white;">Welcome <?php echo$_SESSION['username_a'];
			?></h1><br>
		<div class="bookmenu">
			<div class="box">

				<div class="container"> 
					<h2 style="font-size: 10x;font-weight: bold;color: white;font-family: cordana;text-align: center; ">ADMIN RIGHTS</h2>
					
					<hr color="white" width="400px">
					<div class="list-group" style="text-align: center;">
						
					  <a href="addlibrarian.php" class="list-group-item list-group-item-action list-group-item-primary">Add librarian</a>
					  <a href="removelibrarian.php" class="list-group-item list-group-item-action list-group-item-primary">Remove librarian</a>
					  <a href="viewlibrarian.php" class="list-group-item list-group-item-action list-group-item-primary">View librarian</a>
					  <a href="updatelibrarian.php" class="list-group-item list-group-item-action list-group-item-primary">Update librarian Details</a>
					  <a href="registrationform2.php" class="list-group-item list-group-item-action list-group-item-primary">Add Student</a>
					  <a href="removestudent.php" class="list-group-item list-group-item-action list-group-item-primary">Remove Student</a>
					  <a href="viewstudent.php" class="list-group-item list-group-item-action list-group-item-primary">View Student</a>
					  <a href="updatestudent.php" class="list-group-item list-group-item-action list-group-item-primary">Update Student Details</a>
					  
					</div>
					
					
				</div>
				
			</div>
			
		</div>
		
	</section>

	<footer>
		<p style="color: white;text-align: center;font-size: 20px;font-family: Candara;">
				Website:&nbsp www.invertisuniversity.ac.in <br>
				WhatsApp no:&nbsp 9690955599


		</p>	
	</footer>

</body>
</html>