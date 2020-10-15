<?php 
session_start();
require 'database.php';
if (isset($_GET['f'])) {
	header("Refresh:0.1;url=studentrights.php");
	//echo 'login successully';
	echo("<script>alert('LOGIN SUCCESSFULLY..')</script>");
	# code...
}
if (!isset($_SESSION['username_s'])) {
	echo("<script>alert('PLEASE LOGIN FIRST..!')</script>");

	header("Location:confirm.php");
	# code...
}
?>


<!DOCTYPE html>
<html>
<head>
	<title> Sudents Rights</title>
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
		.box{
			width: 420px;
			height: 420px;
			background-color: none;
			transform: translate(550px,30px);
			border:2px solid white;
			border-radius: 10px;

		}
	</style>


</head>

<body>
	<header style="width: 1536px; height: 100px; background-color: black;">
		<h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		<nav class="list-group list-group-horizontal " style="float: right;">
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="studentlogout.php">HOME</a></li>
			
			<li class="list-group-item list-group-item-link  active " style="background-color: black;"><a href="studentrights.php">STUDENT</a></li>
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a  href="studentlogout.php">LOGOUT</a></li>
		</nav>	
	</header>
	<section style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/stdlogin1.jpg);">
		<div class="bookmenu"><br>
			<h1 style="font-family: candara; text-align: center; font-weight: bold;">Welcome <?php echo$_SESSION['username_s'];
			?></h1><hr color="white" width="500px" >
			<div class="box">
				<div class="container">
					<h1 style="font-size: 10x;font-weight: bold;color: white;font-family: cordana;text-align: center; ">Student Rights</h1>
					<hr>
					<div class="list-group">
						<br>
						<br><br>
						
					  <a href="booksdetails.php" class="list-group-item list-group-item-action list-group-item-primary">View Available Books</a>
					  <a href="viewissuedbooks.php" class="list-group-item list-group-item-action list-group-item-primary">View Issued Books</a>
				      <a href="viewselfissuedbook.php" class="list-group-item list-group-item-action list-group-item-primary">View Self Issued Books</a>
   				      <a href="change.php" class="list-group-item list-group-item-action list-group-item-primary">Change Password</a>

					  
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
