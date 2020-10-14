<?php
session_start();
require 'database.php';

  //@$id=$_POST['id'];
  @$opassword=$_POST['opassword'];
  @$newpassword=$_POST['newpassword'];
  @$cpassword=$_POST['cpassword'];
  @$id=$_SESSION['id_s'];
  @$password=$_REQUEST['password'];
  
    if($_POST['opassword']=="" || $_POST['newpassword']=="" || $_POST['cpassword']=="" )
    {
      echo '<script type="text/javascript">alert("ENTER DATA IN ALL FIELDS")</script>';
    }
    else
    {

      $query="select password from student_detail WHERE id='$id'";
      $query_run=mysqli_query($con,$query);
      $row=mysqli_fetch_array($query_run);
      $password=$row['password'];

      if($opassword==$password)
      {
        if($newpassword==$cpassword)
        { 

        if(mysqli_num_rows($query_run)>0)
        {

          $query = "UPDATE student_detail SET password='$_POST[newpassword]' WHERE id ='$id'";
          $query_run = mysqli_query($con,$query);

          if($query_run)
          {
            echo '<script type="text/javascript">alert("DATA UPDTED")</script>';
            header("Location:change.php?f=1");

          }
          else
          {
            echo '<script type="text/javascript">alert("DATA NOT UPDATED")</script>';
            header("Location:change.php?g=1");

          }
        }  
        else
        {
          echo '<script type="text/javascript">alert("ID DOES NOT EXISTS....PLEASE INSERT VALID ID")</script>';
          header("Location:change.php?h=1");
        }
        }   
        else
        {
          echo '<script type="text/javascript">alert("PASSWORD AND CONFIRM PASSWORD DOES NOT MATCH")</script>';
          header("Location:change.php?i=1");
        }
      }
      else
      {
        echo '<script type="text/javascript">alert("CURRENT PASSWORD DOES NOT MATCH")</script>';
        header("Location:change.php?b=1");
      }
    }
?>
