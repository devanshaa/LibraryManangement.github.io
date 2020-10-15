<?php 
session_start();
require_once('database.php');
if(isset($_GET['f']))
{
	header("Refresh:0.1;url=addlibrarian.php");
	//echo 'login successully';
	echo("<script>alert('LIBRARIAN ADDED SUCCESSFULLY.')</script>");
	//window.location.reload();

} 
elseif(isset($_GET['g']))
{
	header("Refresh:0.1;url=addlibrarian.php");
	//echo 'login successully';
	echo("<script>alert('USER ALREADY EXIST....PLEASE TRY ANOTHER ID')</script>");
	//window.location.reload();

} 
elseif(isset($_GET['h']))
{
	header("Refresh:0.1;url=addlibrarian.php");
	//echo 'login successully';
	echo("<script>alert('PASSWORD AND CONFIRM PASSWORD  DOES NOT MATCH')</script>");
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
		Add Librarian
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

	<section  style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/admin1.jpg);">
		<br><br><br>
		<div style="height: 500px; width: 900px; position: absolute; right: 310px; background-color: rgba(178,163,154,0.5); border-radius: 20px;">
			<br><h2 style="color:white; font-family: candara;font-weight: bold; text-align: center;">ADD LIBRARIAN :</h2>
		<hr color="white" width="400" length="20">
			<form  action="addlibrarian1.php" method="post"> <br>
  
		  <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white;">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">LIBRARIAN NAME:</label>
		      <input type="text" class="form-control" style="width: 350px; margin: 0 auto;" name="username" id="inputEmail4" placeholder="Enter Librarian Name" required >
		    </div>
		    <div class="form-group col-md-6">
		      <label for="stid">LIBRARIAN ID :</label>
		      <input type="text" class="form-control" name ="id"  style="width: 350px; margin: 0 auto;" id="id" placeholder="Enter Librarian Id"required>
		    </div>
		 </div>

		 <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white; ">
		    <div class="form-group col-md-6">
		      <label for="id">PASSWORD:</label>
		      <input type="Password" class="form-control" name="password"  style="width: 350px; margin: 0 auto;" id="id" placeholder="Enter Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
		     <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least onenumber and one uppercase and lowercase letter, and at least 8 or more characters"-->
		    </div>
    

		    <div class="form-group col-md-6" style="text-align: center; font-weight: bold; font-size: 20px;">
		      <label for="inputemail">CONFIRM PASSWORD:</label>
		      <input type="Password" class="form-control" name ="cpassword"  style="width: 350px; margin: 0 auto;" id="inputemail" placeholder="Confirm Password" required>
		    </div>
		 </div>
		 <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white;">
		    <div class="form-group col-md-6">
		      <label for="issue">EMAIL ID:</label>
		      <input type="email" class="form-control" name="email"  style="width: 350px; margin: 0 auto;" id="issuedate" placeholder="Enter Email Address" required>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="return">PHONE NUMBER:</label>
		      <input type="text" class="form-control" name ="phoneno"  style="width: 350px; margin: 0 auto;" id="returndate" placeholder="Enter Phone no." pattern="(?=.*\d).{10,}" title="Must contain at least 10 number" required>
		     <!-- pattern="(?=.*\d).{10,}" title="Must contain at least 10 number" -->
		    </div>
		 </div> <br>
            <div style="text-align: center;">
		  <button name="add" type="submit"  class="btn btn-success">Add Librarian</button></div>
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