<?php


  @$title=$_POST['title'];
  @$author=$_POST['author'];
  @$id=$_POST['id'];

  $con=mysqli_connect('localhost','root');
  if(!$con)
  echo "Connection failed";
  mysqli_select_db($con,'db');
  
     $q="select * from book WHERE id='$id'";
     $query_run=mysqli_query($con,$q);
     $q1="select * from issue_book WHERE id='$id'";
     $query_run1=mysqli_query($con,$q1);
     
    
   

    if(mysqli_num_rows($query_run)>0)
    {
        header("Location:addbook.php?f=1");
      
    }
    elseif (mysqli_num_rows($query_run1)>0) {
      header("Location:addbook.php?f=1");
      # code...
    }
    else
    {
      $q="insert into book values('$title','$author','$id')";
      $query_run=mysqli_query($con,$q);

      if($query_run)
      {
        
        header("Location:addbook.php?g=1");
      }
      else
      {
        echo '<script type="text/javascript">alert("ERROR")</script>';
      }
    }
  

 


?>