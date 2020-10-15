<?php 
require 'database.php';
$id = $_POST['id'];

    $query="select * from student_detail WHERE id='$id'";
    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0)
    {

    $query= "DELETE FROM student_detail WHERE id ='$id'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
      
      echo '<script type="text/javascript">alert("STUDENT REMOVED SUCCESSFULLY")</script>';
      header("Location:removestudent.php?f=1");
    }
    else
    {
      echo '<script type="text/javascript">alert("ERROR REMOVING STUDENT")</script>';
    }
  }
  else
  {
    echo '<script type="text/javascript">alert("ID DOES NOT EXISTS....PLEASE INSERT VALID ID")</script>';
    header("Location:removestudent.php?g=1");
  }
mysqli_close($con);
 ?>