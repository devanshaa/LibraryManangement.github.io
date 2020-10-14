<?php 
require 'database.php';
  @$id=$_POST['id'];
  @$username=$_POST['username'];
  @$password=$_POST['password'];
  @$semester=$_POST['semester'];
  @$phoneno=$_POST['phoneno'];
  @$email=$_POST['email'];
  @$course=$_POST['course']; 
  @$cpassword=$_POST['cpassword'];
   if($password==$cpassword)
  {
    $q="select * from student_detail WHERE id='$id'";
    $query_run=mysqli_query($con,$q);

    if(mysqli_num_rows($query_run)>0)
    {
      
      header("Location:registrationform.php?f=1");
    }
    else
    {
      $q="insert into student_detail values('$username','$id','$course','$semester','$phoneno','$email','$password')";
      $query_run=mysqli_query($con,$q);

      if($query_run)
      {
       
        header("Location:registrationform.php?g=1");
      }
      else
      {
       
        header("Location:registrationform.php?h=1");
      }
    }
  }
  else
  {

   
    header("Location:registrationform.php?i=1");
  }
 


?>
