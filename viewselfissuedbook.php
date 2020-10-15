<?php 
session_start();
require 'database.php';
if (!isset($_SESSION['username_s'])) {
	echo("<script>alert('PLEASE LOGIN FIRST..!')</script>");

	header("Location:confirm.php");
	# code...
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Self Issued Books Details
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
		#table
	    {
	    	color: white;
	    	font-weight: bold;
	    	font-size: 20px;
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
		<div class="container">
			<h2 style="color:white; font-family: candara; font-weight: bold;text-align: center;">SELF ISSUED BOOK LIST :</h2>
			<div style="width: 1500px; position: absolute; right: 10px; background-color: rgba(178,163,154,0.5); border-top: none;">
			
			<table class="table table-striped table-hover" id="table">
				<thead style="background-color: black;">
					<tr>
						<th>NAME</th>
						<th>STUDENT ID</th>
						<th>TITLE</th>
						<th>AUTHOR</th>
						<th>BOOK ID</th>
						<th>EMAIL</th>
						<th>ISSUE DATE</th>
						<th>RETURN DATE</th>


					</tr>
				</thead>
				<?php 
				    @$stid=$_SESSION['id_s'];
                    $q="select * from issue_book WHERE stid='$stid' ";
                    $r=mysqli_query($con,$q);
                    while($res=mysqli_fetch_array($r))
                    {
				 ?>
				<tbody style="color:black;background-color: rgba(172,169,155,0.5); font-size: 15px;">

					<tr>
						<td><?php echo $res['username']; ?></td>
						<td><?php echo $res['stid']; ?></td>
						<td><?php echo $res['title']; ?></td>
						<td><?php echo $res['author']; ?></td>
						<td><?php echo $res['id']; ?></td>
						<td><?php echo $res['email']; ?></td>
						<td><?php echo $res['issuedate']; ?></td>
						<td><?php echo $res['returndate']; ?></td>


					</tr>
					
				</tbody>
				   
				<?php
                     }
				 ?>
				
			</table>
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