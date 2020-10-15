<?php 
session_start();
if(isset($_GET['f']))
{
  header("Refresh:0.1;url=updatelibrarian.php");
   echo '<script type="text/javascript">alert("LIBRARIAN DETAILS UPDATED")</script>';
}
elseif (isset($_GET['g'])) {
  header("Refresh:0.1;url=updatelibrarian.php");
   echo '<script type="text/javascript">alert("ERROR")</script>';
}
elseif (isset($_GET['h'])) {
	header("Refresh:0.1;url=updatelibrarian.php");
	 echo '<script type="text/javascript">alert("ID DOES NOT EXISTS")</script>';
}
if (!isset($_SESSION['username_a'])) {
	echo("<script>alert('PLEASE LOGIN FIRST..!')</script>");

	header("Location:confirmadmin.php");
	}
require 'database.php';

	@$username="";
    @$id="";
	@$password="";
	@$email="";
	@$phoneno="";




?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Update Librarian
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
	<div id="main-wrapper">
		
		
		<div class="inner_container">
			<?php
		if(isset($_POST['fetch_btn'])){
					//echo '<script type="text/javascript">alert("Go button Clicked")</script>';
					
					@$id = $_POST['id'];
					
					if($id=="")
					{
						echo '<script type="text/javascript">alert("Enter ID to get librarian details")</script>';
					}
					else
					{
						$query = "select * from register_librarian where id='$id'";
						$query_run = mysqli_query($con,$query);
						if($query_run)
						{
							if(mysqli_num_rows($query_run)>0)
							{
								$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
								@$id=$row['id'];
								@$username=$row['username'];
								@$password=$row['password'];
								@$email=$row['email'];
								@$phoneno=$row['phoneno'];
      						}
							else{
								echo '<script type="text/javascript">alert("Invalid Librarian ID")</script>';
				              header("Location:updatelibrarian.php?h=1");

							}
						}
						else{
							echo '<script type="text/javascript">alert("ERROR")</script>';
						     header("Location:updatelibrarian.php?g=1");

						}
						
					}
					
				}

				if(isset($_POST['update_btn']))
				{
					//echo '<script type="text/javascript">alert("Update Clicked")</script>';
					if($_POST['id']=="" || $_POST['username']=="" || $_POST['password']=="" || $_POST['email']=="" || $_POST['phoneno']=="" )
					{
						echo '<script type="text/javascript">alert("Enter Data in All fields")</script>';
					}
					else
					{
						@$id=$_POST['id'];
						@$username=$_POST['username'];
						@$password=$_POST['password'];
						@$email=$_POST['email'];
						@$phoneno=$_POST['phoneno'];

						
						$query = "update register_librarian 
							SET username='$username',password='$password',email='$email',phoneno='$phoneno'
							WHERE id='$id'";
							
						$query_run = mysqli_query($con,$query);
				
							if($query_run)
							{
                             echo '<script type="text/javascript">alert("Librarian Details Updated")</script>';
                                                 header("Location:updatelibrarian.php?f=1");
                                                 exit;

                            }
                            else
                            {
                              echo '<script type="text/javascript">alert("Error")</script>';
                               header("Location:updatelibrarian.php?g=1");
                               exit;

    
                             }
	 					
					}
					
				}
				
				?>
	<header style="width: 1536px; height: 100px; background-color: black;">
		<h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		<nav class="list-group list-group-horizontal " style="float: right;">
			
			
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="admin.php">BACK</a></li>
		</nav>	
	</header>

	<section  style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/admin1.jpg);">
		<br><br><br>
		<div style="height: 550px; width: 800px; position: absolute; right: 350px; background-color: rgba(178,163,154,0.5); border-radius: 20px;">
			<br><h2 style="color:white; font-family: candara;font-weight: bold; text-align: center;">UPDATE LIBRARIAN DETAILS :</h2>
		<hr color="white" width="400" length="20">
			<form action="updatelibrarian.php" method="post"> <br>
  
           <div class="form-group" style="text-align: center;font-size: 20px; color:white;font-weight: bold;" >
		      <label for="id">LIBRARIAN ID :</label>
		      <input type="text" class="form-control" name ="id"  style="width: 350px; margin: 0 auto;" id="id" placeholder="Enter Librarian Id" value="<?php echo @$_POST['id'];?>"><br>
		    <button id="btn_go" name="fetch_btn" class="btn btn-danger" type="submit">Go</button>

		    </div>

		    
		    
		    		                 	          
		 

		 <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white; ">
		    <div class="form-group col-md-6">
		      <label for="username">LIBRARIAN NAME:</label>
		      <input type="text" class="form-control" style="width: 350px; margin: 0 auto;" name="username" id="username" placeholder="Enter Librarian Name" value="<?php echo $username; ?>" >
		    </div>
		    <div class="form-group col-md-6">
		      <label for="password">PASSWORD:</label>
		      <input type="text" class="form-control" name="password"  style="width: 350px; margin: 0 auto;" id="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php echo $password; ?>">
		    </div>
    

		    
		 </div>

		 <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white;">
		    <div class="form-group col-md-6">
		      <label for="email">EMAIL ID:</label>
		      <input type="email" class="form-control" name="email"  style="width: 350px; margin: 0 auto;" id="email" placeholder="Enter Email Address" value="<?php echo $email; ?>">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="phoneno">PHONE NUMBER:</label>
		      <input type="text" class="form-control" name ="phoneno"  style="width: 350px; margin: 0 auto;" id="phoneno" placeholder="Enter Phone no." pattern="(?=.*\d).{10,}" title="Must contain at least 10 number" value="<?php echo $phoneno; ?>">
		    </div>
		 </div> <br>
            <div style="text-align: center;">
					<button id="btn_update" name="update_btn" class="btn btn-success" type="submit">Update Details</button>
							</div>

		</form>
			
		
		
			
		
	</section>

	<footer>
		<p style="color: white;text-align: center;font-size: 20px;font-family: Candara;">
				Website:&nbsp www.invertisuniversity.ac.in <br>
				WhatsApp no:&nbsp 9690955599
		</p>
	</footer>
</div>
</div>


</body>
</html>

