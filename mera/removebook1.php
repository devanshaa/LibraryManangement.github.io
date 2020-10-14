<?php 
require 'database.php';
$id = $_POST['id'];

    $query="select * from book WHERE id='$id'";
    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0)
    {

    $query= "DELETE FROM book WHERE id ='$id'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
      
      echo '<script type="text/javascript">alert("BOOK REMOVED SUCCESSFULLY")</script>';
      header("Location:removebook.php?f=1");
    }
    else
    {
      echo '<script type="text/javascript">alert("ERROR REMOVING BOOK")</script>';
    }
  }
  else
  {
    echo '<script type="text/javascript">alert("ID DOES NOT EXISTS....PLEASE INSERT VALID ID")</script>';
    header("Location:removebook.php?g=1");
  }
mysqli_close($con);
 ?>
