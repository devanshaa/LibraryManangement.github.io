
  <?php
require 'database.php';

  
  @$title=$_POST['title'];
  @$author=$_POST['author'];
  @$id=$_POST['id'];

    $query="select * from issue_book WHERE id='$id'";
    $query_run=mysqli_query($con,$query);


    if(mysqli_num_rows($query_run)>0)
    {
    
              $query="select * from issue_book WHERE id='$id'";
              $query_run=mysqli_query($con,$query);

            $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
           @$title=$row['title'];
           @$author=$row['author'];
            $query="insert into book values('$title','$author','$id')";
            $query_run=mysqli_query($con,$query);
            if($query_run)
            {
              $query= "DELETE FROM issue_book WHERE id ='$id'";
             $query_run= mysqli_query($con,$query);

             echo '<script type="text/javascript">alert("BOOK RETURNED SUCCESSFULLY")</script>';
             header("Location:returnbook.php?f=1");
            }
            else
            {
                  echo '<script type="text/javascript">alert("ERROR")</script>';
            }

     }
      else
      {
         echo '<script type="text/javascript">alert("BOOK NOT RETURNED.....CHECK YOUR ENTRIES")</script>';
         header("Location:returnbook.php?g=1");
      }
     

?>