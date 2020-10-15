<?php
session_start(); 
require 'database.php';


		@$id=$_POST['id'];
		@$password=$_POST['password'];
		$q="select * from student_detail WHERE id='$id' AND password='$password' ";
		$result = mysqli_query ( $con , $q );
		if($result)
		{
			if(mysqli_num_rows($result)>0)
          {
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          $id=$row['id'];
          $username=$row['username'];
          $_SESSION['username_s'] = $username;
          $_SESSION['password'] = $password;
          $_SESSION['id_s']=$id;
         
          
          header( "Location: studentrights.php?f=1");
          }
          else
          {
            echo '<script type="text/javascript">alert("NO SUCH USER EXISTS... INVALID CREDENTIALS")</script>';
            header("Location:studentlogin.php?g=1");
          }
        }
        else
        {
          echo '<script type="text/javascript">alert("DATABASE ERROR")</script>';
        }
	
	
 ?>