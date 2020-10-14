<?php
session_start();
if(isset($_GET['f']))
{
  header("Refresh:0.1;url=updatebook.php");
   echo '<script type="text/javascript">alert("BOOK DETAILS UPDATED")</script>';

}
elseif (isset($_GET['g'])) {
  header("Refresh:0.1;url=updatebook.php");
   echo '<script type="text/javascript">alert("ERROR")</script>';

}
elseif (isset($_GET['h'])) {
  header("Refresh:0.1;url=updatebook.php");
   echo '<script type="text/javascript">alert("ID DOES NOT EXISTS")</script>';

}
elseif (isset($_GET['b'])) {
  header("Refresh:0.1;url=updatebook.php");
   echo '<script type="text/javascript">alert("INVALID BOOK ID")</script>';

}



if (!isset($_SESSION['username_l'])) {
	echo("<script>alert('PLEASE LOGIN FIRST..!')</script>");

	header("Location:confirmlib.php");
	# code...
}
require 'database.php';
	@$title="";
	@$author="";
    @$id="";
?>
			<!DOCTYPE html>
<html>
<head>
	<title>Update Book Details</title>
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
	<div id="main-wrapper">
		
		
		<div class="inner_container">

<?php
		if(isset($_POST['fetch_btn'])){
					//echo '<script type="text/javascript">alert("Go button Clicked")</script>';
					
					@$id = $_POST['id'];
					
					if($id=="")
					{
						echo '<script type="text/javascript">alert("Enter ID to get book details")</script>';
					}
					else
					{
						$query = "select * from book where id='$id'";
						$query_run = mysqli_query($con,$query);
						if($query_run)
						{
							if(mysqli_num_rows($query_run)>0)
							{
								$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
								@$title=$row['title'];
								@$author=$row['author'];
								@$id=$row['id'];
      						}
							else{
								echo '<script type="text/javascript">alert("Invalid Book ID")</script>';
				              header("Location:updatebook.php?b=1");

							}
						}
						else{
							echo '<script type="text/javascript">alert("Error in query")</script>';
						     header("Location:updatebook.php?g=1");

						}
						
					}
					
				}
				?>
	<header style="width: 1536px; height: 100px; background-color: black;">
		<h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		<nav class="list-group list-group-horizontal " style="float: right;">
			
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="librarianrights.php">BACK</a></li>
		</nav>	
	</header>
	<section style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/librarian1.jpg);">
		<br>
		<div style="height: 550px; width: 500px; position: absolute; right: 520px; top:150px; background-color: rgba(195,202,212,0.5); border-radius: 20px;">
					<br><h2 style="color:white; font-family: candara;font-weight: bold; text-align: center;">UPDATE BOOK DETAILS :</h2>
		<hr color="white" width="400" length="20">

			 
        <form action="updatebook.php" method="post">                 <br>

           <div class="form-group" style="text-align: center;font-size: 20px;color: white; font-weight: bold;" >
          
           <label for="inputEmail4">BOOK ID :</label>
           <input type="text" class="form-control" name="id" style="width: 300px; margin: 0 auto;" id="inputEmail4" placeholder="Enter Book Id" value="<?php echo @$_POST['id'];?>"><br>
           	          <button id="btn_go" name="fetch_btn" class="btn btn-danger" type="submit">Go</button>

           </div>
          <div class="form-group" style="text-align: center;color: white; font-weight: bold; font-size: 20px;">
          <label for="booktitle" translate=""> BOOK TITLE :</label><br>
          <input type="text" class="form-control" style="width: 300px; margin: 0 auto;" name="title" id="booktitle" placeholder="Enter Book Title" value="<?php echo $title; ?>">
          </div>
          <div class="form-group" style="text-align: center;font-size: 20px; color: white;font-weight: bold;">
          <label for="authorname">AUTHOR :</label>
          <input type="text" class="form-control" name="author" id="authorname" style="width: 300px; margin: 0 auto;" placeholder="Enter Name of author" value="<?php echo $author; ?>">
          </div>
          <br><div style="text-align: center;">      

					<button id="btn_update" name="update_btn" class="btn btn-success" type="submit">Update Book</button>
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


			<?php
			
				if(isset($_POST['update_btn']))
				{
					//echo '<script type="text/javascript">alert("Update Clicked")</script>';
					if($_POST['id']=="" || $_POST['title']=="" || $_POST['author']=="" )
					{
						echo '<script type="text/javascript">alert("Enter Data in All fields")</script>';
					}
					else
					{
						@$id=$_POST['id'];
						@$title=$_POST['title'];
						@$author=$_POST['author'];
						
						$query = "update book 
							SET title='$title',author='$author'
							WHERE id='$id'";
							
						$query_run = mysqli_query($con,$query);
				
							if($query_run)
							{
								echo '<script type="text/javascript">alert("Book Updated successfully")</script>';
								                      header("Location:updatebook.php?f=1");

							}
							else{
								echo '<script type="text/javascript">alert("Error")</script>';
								                      header("Location:updatebook.php?g=1");

							}
						
					}
				}
				
				
			?>
			</body>
</html>

	
















			
			