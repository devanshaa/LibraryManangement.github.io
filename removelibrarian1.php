<?php 
require 'database.php';
$id = $_POST['id'];

    $query="select * from register_librarian WHERE id='$id'";
    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0)
    {

    $query= "DELETE FROM register_librarian WHERE id ='$id'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
      
      echo '<script type="text/javascript">alert("LIBRARIAN REMOVED SUCCESSFULLY")</script>';
      header("Location:removelibrarian.php?f=1");
    }
    else
    {
      echo '<script type="text/javascript">alert("ERROR REMOVING LIBRARIAN")</script>';
    }
  }
  else
  {
    echo '<script type="text/javascript">alert("ID DOES NOT EXISTS....PLEASE INSERT VALID ID")</script>';
    header("Location:removelibrarian.php?g=1");
  }
mysqli_close($con);
 ?>
