<?php 
session_start();
require 'database.php';
if (!isset($_SESSION['username_l'])) {
	echo("<script>alert('PLEASE LOGIN FIRST..!')</script>");

	header("Location:confirmlib.php");
	# code...
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Issued Books Details
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
<body style="background-color: #696969;">
	<header style="width: 1536px; height: 100px; background-color: black;">
		<h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		<nav class="list-group list-group-horizontal " style="float: right;">
			
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a  href="librarianrights.php">BACK</a></li>
			
			
		</nav>
	</header>
	<section style=" background-color: grey;height:750px ; background-image: url(images/librarian1.jpg);">
		<div class="container">
			<div style=" width: 1530px; position: absolute; right: 2.5px; background-color: rgba(178,163,154,0.5); border-top: none;border-bottom-right-radius: 20px;border-bottom-left-radius:  20px;">
							<h2 style="color:white; font-family: candara; font-weight: bold;text-align: center;">VIEW ISSUED BOOKS :</h2>

			<div style=" background-color: grey; background-image: url(images/librarian1.jpg);object-fit: cover;background-repeat: repeat;background-attachment: scroll;">
			
			<table class="table table-striped table-hover" id="table">
				<thead style="background-color: black;">
					<tr>
						<th>NAME</th>
						<th>ID</th>
						<th>TITLE</th>
						<th>AUTHOR</th>
						<th>BOOK ID</th>
						<th>EMAIL</th>
						<th>ISSUE DATE</th>
						<th>RETURN DATE</th>
					</tr>
				</thead>
				<?php 
                    $q="select username,stid,title,author,id,email,issuedate,returndate from issue_book";
                    $r=mysqli_query($con,$q);
                    while($res=mysqli_fetch_array($r))
                    {
				 ?>
				<tbody style="color:black;background-color: rgba(191,196,215,0.5); font-size: 15px;">
					<tr>						
						<td><?php echo   $res['username']; ?></td>
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
			<footer>
		<p style="color: white;text-align: center;font-size: 20px;font-family: Candara;">
				Website:&nbsp www.invertisuniversity.ac.in <br>
				WhatsApp no:&nbsp 9690955599
		</p>
		
	</footer>
			</div>
		</div>
		
	</div>
	</section>

</body>
</html>