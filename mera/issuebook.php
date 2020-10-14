<?php  
session_start();
require 'database.php';
if(isset($_GET['f']))
{
	header("Refresh:0.1;url=issuebook.php");
	//echo 'login successully';
	echo '<script type="text/javascript">alert("BOOK ISSUED SUCCESSFULLY....!!")</script>';
	//window.location.reload();

} 
elseif(isset($_GET['g']))
{
	header("Refresh:0.1;url=issuebook.php");
	//echo 'login successully';
	echo '<script type="text/javascript">alert("BOOK ALREADY ISSUED...TRY ANOTHER BOOK ID")</script>';
	//window.location.reload();

} 
elseif(isset($_GET['h']))
{
	header("Refresh:0.1;url=issuebook.php");
	//echo 'login successully';
	echo '<script type="text/javascript">alert("STUDENT NOT EXISTS IN DATABASE")</script>';
	//window.location.reload();

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
	<title>Issue Book</title>
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
	<section style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/librarian1.jpg);"><br><br>
		<br><br>
	 <div style="height: 490px; width: 900px; position: absolute; right: 310px; background-color: rgba(200,190,200,0.6); border-radius: 20px;">
	 			<br><h2 style="color:white; font-family: candara;color:mediumblue; font-weight: bold; text-align: center;">ISSUE BOOK :</h2>
		<hr color="white" width="400" length="20">

		
		<form action="issuebook1.php" method="post"> <br>
  
		  <div class="form-row" style="text-align: center; color:mediumblue; font-weight: bold; font-size: 20px;">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">STUDENT NAME :</label>
		      <input type="text" class="form-control" style="width: 350px; margin: 0 auto;" name="username" id="inputEmail4" placeholder="Enter Student Name" required >
		    </div>
		    <div class="form-group col-md-6">
		      <label for="stid">STUDENT ID :</label>
		      <input type="text" class="form-control" name ="stid"  style="width: 350px; margin: 0 auto;" id="stid" placeholder="Enter Student Id" required>
		    </div>
		 </div>

		 <div class="form-row" style="text-align: center; font-weight: bold;color:mediumblue;  font-size: 20px;">
		    <div class="form-group col-md-6">
		      <label for="id">BOOK ID :</label>
		      <input type="text" class="form-control" name="id"  style="width: 350px; margin: 0 auto;" id="id" placeholder="Enter Book ID" required>
		    </div>
    

		    <div class="form-group col-md-6" style="text-align: center; font-weight: bold;color:mediumblue;  font-size: 20px;">
		      <label for="inputemail">PHONE NUMBER :</label>
		      <input type="text" class="form-control" name ="email"  style="width: 350px; margin: 0 auto;" id="inputemail" placeholder="Enter Phone No." pattern="(?=.*\d).{10,}" title="Must contain at least 10 number" required>
		    </div>
		 </div>

		 <div class="form-row" style="text-align: center; font-weight: bold;color:mediumblue;  font-size: 20px;">
		    <div class="form-group col-md-6">
		      <label for="issue">ISSUE DATE :</label>
		      <input type="Date" class="form-control" name="issuedate"  style="width: 350px; margin: 0 auto;" id="issuedate" placeholder="Enter Issue Date" required>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="return">RETURN DATE :</label>
		      <input type="Date" class="form-control" name ="returndate"  style="width: 350px; margin: 0 auto;" id="returndate" placeholder="Enter Return Date" required>
		    </div>
		 </div> <br>
            <div style="text-align: center;">
		  <button name="issue" type="submit"  class="btn btn-success">Issue Book</button></div>
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