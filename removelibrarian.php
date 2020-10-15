<?php 
session_start();
require 'database.php';
if(isset($_GET['f']))
{
  header("Refresh:0.1;url=removelibrarian.php");
  echo("<script>alert('LIBRARIAN REMOVED SUCCESSFULLY..')</script>");
}
elseif(isset($_GET['g']))
{
	header("Refresh:0.1;url=removelibrarian.php");
	echo("<script>alert('ID DOES NOT EXIST....PLEASE INSERT VALID ID')</script>");
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
		Remove Librarian
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
		.loginform
		{
			width: 1536px;
			height: 577px;
			background-color: none;
		}
		.box{
			width: 400px;
			height: 300px;
			background-color: none;
			transform: translate(600px,100px);
			color: white;

		}

	</style>
</head>
<body>
	<header style="width: 1536px; height: 100px; background-color: black;">
		<h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		<nav class="list-group list-group-horizontal " style="float: right;">
			
			
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="admin.php">BACK</a></li>
		</nav>	
	</header>

	<section  style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/admin1.jpg);"><br><br>
		<br><br><br><br><br><br>
		<div style="height: 300px; width: 400px; position: absolute; right: 570px; background-color: rgba(178,163,154,0.5); border-radius: 20px;">
			<br><h2 style="color:white; font-family: candara;font-weight: bold; text-align: center;">REMOVE LIBRARIAN :</h2>
		<hr color="white" width="400" length="20">
			<form action="removelibrarian1.php" method="post"> <br>
				<div class="form-group" style="text-align: center;color:white;font-size: 20px; font-weight: bold;" >
          
           <label for="inputEmail4">LIBRARIAN ID:</label>
           <input type="text" class="form-control" name="id" style="width: 300px; margin: 0 auto;" id="inputEmail4" placeholder="Enter Librarian Id" required>
           
           </div><div style="text-align: center;"><br>

             <button name="add"  type="submit"  class="btn btn-danger" >Remove Librarian</button></div>
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