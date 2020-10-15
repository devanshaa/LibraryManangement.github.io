<?php 
session_start(); 
if (isset($_GET['g'])) {
	header("Refresh:0.1;url=librarianrights.php");
	echo("<script>alert('LOGIN SUCCESSFULLY..')</script>");
	# code...
}
if (!isset($_SESSION['username_l'])) {
	echo("<script>alert('PLEASE LOGIN FIRST..!')</script>");

	header("Location:confirmlib.php");
	# code...
}



 ?><!DOCTYPE html>
<html>
<head>
	<title> Librarian Rights</title>
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
			height: 470px;
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
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="librarianlogout.php">HOME</a></li>
			<li class="list-group-item list-group-item-link  active " style="background-color: black;"><a href="librarianrights.php">LIBRARIAN</a></li>
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="librarianlogout.php">LOGOUT</a></li>
		</nav>	
	</header>
	<section style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/librarian1.jpg);">
		<div class="bookmenu">
			<p style="font-weight: bold;font-family: candara; text-align: center; font-size: 40px;"> Welcome &nbsp<?php echo $_SESSION['username_l'] ?></p>
			<div class="box">
				<div class="container">
					<h1 style="font-size: 10x;font-weight: bold;color: white;font-family: cordana;text-align: center; ">Librarian Rights</h1>
					<hr>
					
					<div class="list-group" style="text-align: center;">
						
						<a href="addbook.php" class="list-group-item list-group-item-action list-group-item-primary">Add book</a>
						<a href="removebook.php" class="list-group-item list-group-item-action list-group-item-primary">Remove book</a>
						<a href="view.php" class="list-group-item list-group-item-action list-group-item-primary">View available books</a>
					  <a href="issuebook.php" class="list-group-item list-group-item-action list-group-item-primary">Issue a book</a>

					  <a href="returnbook.php" class="list-group-item list-group-item-action list-group-item-primary">Return a book</a>
					  
					  <a href="viewbook.php" class="list-group-item list-group-item-action list-group-item-primary">View Issued books</a>
					  <a href="updatebook.php" class="list-group-item list-group-item-action list-group-item-primary">Update book details</a>
					  <a href="chngpwdlib.php" class="list-group-item list-group-item-action list-group-item-primary">Change Password</a>
					  
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