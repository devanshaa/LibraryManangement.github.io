<?php 
session_start();
require 'database.php';
if(isset($_GET['f']))
{
  header("Refresh:0.1;url=returnbook.php");
  echo("<script>alert('BOOK RETURNED SUCCESSFULLY...!')</script>");
}
elseif(isset($_GET['g']))
{
	header("Refresh:0.1;url=returnbook.php");
	echo("<script>alert('BOOK NOT RETURNED.....CHECK YOUR ENTRIES')</script>");
}
if (!isset($_SESSION['username_l'])) {
	echo("<script>alert('PLEASE LOGIN FIRST..!')</script>");

	header("Location:confirmlib.php");
	# code...
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Return Book</title>
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
			
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="librarianrights.php">BACK</a></li>
		</nav>	
	</header>
	<section style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/librarian1.jpg);">
		<br><br><br><br><br><br><br><br>
		
		<div style="height: 270px; width: 400px; position: absolute; right: 570px; background-color: rgba(195,202,212,0.5); border-radius: 20px;">
			<br><h2 style="color:white; font-family: candara;font-weight: bold; text-align: center;">RETURN BOOK DETAILS :</h2>
		<hr color="white" width="400" length="20">
			<form action="returnbook1.php" method="post"> <br>
				<div class="form-group" style="text-align: center;color:white; font-size: 20px; font-weight: bold;" >
          
           <label for="inputEmail4">BOOK ID :</label>
           <input type="text" class="form-control" name="id" style="width: 300px; margin: 0 auto;" id="inputEmail4" placeholder="Enter Book Id" required>
           
           </div><div style="text-align: center;">

             <button name="add"  type="submit"  class="btn btn-success" >Return Book</button></div>
			</form>
			
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