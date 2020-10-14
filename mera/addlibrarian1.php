<?php


  @$id=$_POST['id'];
  @$username=$_POST['username'];
  @$password=$_POST['password'];
  @$cpassword=$_POST['cpassword'];
  @$phoneno=$_POST['phoneno'];
  @$email=$_POST['email'];
  $con=mysqli_connect('localhost','root');
  if(!$con)
  echo "Connection failed";
  mysqli_select_db($con,'db');
  if($password==$cpassword)
  {
     $q="select * from register_librarian WHERE id='$id'";
    $query_run=mysqli_query($con,$q);

    if(mysqli_num_rows($query_run)>0)
    {
      header("Location:addlibrarian.php?g=1");
      echo '<script type="text/javascript">alert("USER ALREADY EXIST....PLEASE TRY ANOTHER ID")</script>';
    }
    else
    {
      $q="insert into register_librarian values('$username','$id','$password','$email','$phoneno')";
      $query_run=mysqli_query($con,$q);

      if($query_run)
      {
        echo '<script type="text/javascript">alert("REGISTRATION SUCCESSFUL")</script>';
        header("Location:addlibrarian.php?f=1");
      }
      else
      {
        echo '<script type="text/javascript">alert("ERROR")</script>';
      }
    }
  }
  else
  {
    echo '<script type="text/javascript">alert("PASSWORD AND CONFIRM PASSWORD DOES NOT MATCH")</script>';
    header("Location:addlibrarian.php?h=1");
  }
 


?>