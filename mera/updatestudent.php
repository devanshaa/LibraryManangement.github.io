<?php 
session_start();
if(isset($_GET['g']))
{
	header("Refresh:0.1;url=updatestudent.php");
	 echo '<script type="text/javascript">alert("ERROR")</script>';
}
elseif (isset($_GET['h'])) {
	header("Refresh:0.1;url=updatestudent.php");
	 echo '<script type="text/javascript">alert("INVALID ID")</script>';
}
elseif (isset($_GET['f'])) {
	header("Refresh:0.1;url=updatestudent.php");
	 echo '<script type="text/javascript">alert("STUDENT DETAIL UPDATED")</script>';
}
if (!isset($_SESSION['username_a'])) {
	echo("<script>alert('PLEASE LOGIN FIRST..!')</script>");

	header("Location:confirmadmin.php");
	}
require_once 'database.php';
  @$id="";
  @$username="";
  @$course="";
  @$semester="";
  @$phoneno="";  
  @$email="";
  @$password="";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Update Student
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
<body><div id="main-wrapper">
		
		
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
						$query = "select * from student_detail where id='$id'";
						$query_run = mysqli_query($con,$query);
						if($query_run)
						{
							if(mysqli_num_rows($query_run)>0)
							{
								$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
								@$id=$row['id'];
								@$username=$row['username'];
								@$course=$row['course'];
								@$semester=$row['semester'];
								@$password=$row['password'];
								@$email=$row['email'];
								@$phoneno=$row['phoneno'];
      						}
							else{
								echo '<script type="text/javascript">alert("Invalid Student ID")</script>';
				              header("Location:updatestudent.php?h=1");

							}
						}
						else{
							echo '<script type="text/javascript">alert("ERROR")</script>';
						     header("Location:updatestudent.php?g=1");

						}
						
					}
					
				}
				
				if(isset($_POST['update_btn']))
				{
					//echo '<script type="text/javascript">alert("Update Clicked")</script>';
					if($_POST['id']=="" || $_POST['username']=="" || $_POST['password']=="" || $_POST['email']=="" || $_POST['phoneno']=="" || $_POST['course']=="" || $_POST['semester']=="" )
					{
						echo '<script type="text/javascript">alert("Enter Data in All fields")</script>';
					}
					else
					{
						@$id=$_POST['id'];
						@$username=$_POST['username'];
						@$password=$_POST['password'];
						@$course=$_POST['course'];
						@$semester=$_POST['semester'];
						@$email=$_POST['email'];
						@$phoneno=$_POST['phoneno'];

						
						$query = "update student_detail 
							SET username='$username',password='$password',course='$course',semester='$semester',email='$email',phoneno='$phoneno'
							WHERE id='$id'";
							
						$query_run = mysqli_query($con,$query);
				
							if($query_run)
							{
                             echo '<script type="text/javascript">alert("Student Details Updated")</script>';
                                                 header("Location:updatestudent.php?f=1");
                                                 exit;

                            }
                            else
                            {
                              echo '<script type="text/javascript">alert("Error")</script>';
                               header("Location:updatestudent.php?g=1");
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

	<section  style="width: 1536px;height:675px; background-color: grey; background-image: url(images/admin1.jpg);">
		<br><br>
		<div style="height: 600px; width:800px; position: absolute; right: 350px; top: 150px; background-color: rgba(178,163,154,0.5); border-radius: 20px;">
			<br><h2 style="color:white; font-family: candara;font-weight: bold; text-align: center;">UPDATE STUDENT DETAILS :</h2>
		<hr color="white" width="400" length="20">

			<form  action="updatestudent.php" method="post"><br>
           <div class="form-group" style="text-align: center;font-size: 20px;color:white; font-weight: bold;" >
		      STUDENT ID :
		      <input type="text" class="form-control" name ="id"  style="width: 350px; margin: 0 auto;" id="id" placeholder="Enter Student Id"  value="<?php echo @$_POST['id'];?>"><br>
		      		    <button id="btn_go" name="fetch_btn" class="btn btn-danger" type="submit">Go</button>
		    </div>
		 <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white;">
		    <div class="form-group col-md-6">
		      NAME :
		      <input type="text" class="form-control" style="width: 350px; margin: 0 auto;" name="username" id="inputEmail4" placeholder="Enter Name" value="<?php echo $username; ?>" >
		    </div>
		    <div class="form-group col-md-6">
		      PASSWORD:
		      <input type="text" class="form-control" name="password"  style="width: 350px; margin: 0 auto;" id="issue" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php echo $password; ?>">
		    </div>
		 </div>

		 <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white; ">
		    <div class="form-group col-md-6">
		       COURSE:
         							<input list="my" placeholder="COURSE" style=" width: 350px; margin: 0 auto;" class="form-control" name="course" value="<?php echo $course; ?>">
							<datalist id="my">
								<option value="B.TECH"></option>
								<option value="BBA"></option>
								<option value="BSC"></option>
								<option value="BJMC"></option>
								<option value="BIO.TECH"></option>
								<option value="BCA"></option>
								<option value="B.COM"></option>
								<option value="Fashion Designer"></option>



							</datalist>
		    </div>
    

		    <div class="form-group col-md-6" style="text-align: center; font-weight: bold; font-size: 20px;">
		     SEMESTER:
                    <input list="sem" class="form-control" style=" width: 350px; margin: 0 auto;" placeholder="SEMESTER" name="semester" value="<?php echo $semester; ?>">
							<datalist id="sem">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>


							</datalist>
		    </div>
		 </div>
		 <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white;">
		    <div class="form-group col-md-6">
		      PHONE NUMBER:
		      <input type="text" class="form-control" name="phoneno"  style="width: 350px; margin: 0 auto;" id="issue" placeholder="Enter Phone" pattern="(?=.*\d).{10,}" title="Must contain at least 10 number" value="<?php echo $phoneno; ?>">
		    </div>
		    <div class="form-group col-md-6">
		      EMAIL ID:
		      <input type="email" class="form-control" name ="email"  style="width: 350px; margin: 0 auto;" id="return" placeholder="Enter Email Address" value="<?php echo $email; ?>">
		     <!-- pattern="(?=.*\d).{10,}" title="Must contain at least 10 number" -->
		    </div>
		 </div>
		 
        	
						
            <div style="text-align: center;"><br>
					<button id="btn_update" name="update_btn" class="btn btn-success" type="submit">Update Details</button>
							</div>
							
						</div>
					  
					</form>
					

					
				</div>
				
			</div>
		
		
			
		
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

