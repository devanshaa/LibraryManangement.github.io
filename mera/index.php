<?php
require 'database.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Management System</title>
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
		.box
		{
			width: 500px;
			height: 280px;
			background-color: rgba(200,140,124,0.8);
			transform: translate(520px,150px);
			border-radius: 20px;

		}
		h1
		{
			color:white;
			font-weight: bold;
		}

		footer
		{
			width: 1536px;
			height: 85px;
			background-color: black;
		}
		li
		{
			text-decoration: none;
			display: inline-block;
		}
		ul{
			word-spacing: 10px;
		}
		nav{
			background-color: black;
		}
	</style>
</head>
<body>
	<header style="width: 1536px; height: 100px; background-color: black;">
		<h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		<nav class="list-group list-group-horizontal " style="float: right;">
			<li class="list-group-item list-group-item-link active " style="background-color: black; "><a href="home.php"><b>HOME</b></a></li>
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="studentlogin.php"><b>STUDENT</b></a></li>
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="librarianlogin.php"><b>LIBRARIAN</b></a></li>
			
			
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="adminlogin.php"><b>ADMIN</b></a></li>
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="about.php"><b>ABOUT</b></a></li>

		</nav>	
	</header>
	<section style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/home2.jpg);">
		<div>
          <br><br>
			<div class="box"><marquee>
				<br><br>
				<h2 style="text-align:center; font-size:45px; color: black; font-family: Candara;">Welcome To Invertis Library</h2><br>
				<h1 style="text-align:center; font-size:30px; color: black; font-family: Candara;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				Opens at 9:00am</h1><br>
				<h1 style="text-align:center; font-size:30px; color: black; font-family: Candara;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Closes at 3:00pm</h1><br></marquee>				
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