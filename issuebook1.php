  <?php
  require 'database.php';


  @$username=$_POST['username'];
  @$stid=$_POST['stid'];
 // @$title=$_POST['title'];
 // @$author=$_POST['author'];
  @$id=$_POST['id'];
  //@$email=$_POST['email'];
  @$issuedate=$_POST['issuedate'];
  @$returndate=$_POST['returndate'];

    $query="select * from book WHERE id='$id' ";
    $query_run=mysqli_query($con,$query);
    $query1="select * from student_detail WHERE id='$stid' && username='$username'";
    $query_run1=mysqli_query($con,$query1);
    

    if(mysqli_num_rows($query_run)>0)
    {
      
     
      if(mysqli_num_rows($query_run1)>0)
      {  
      $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
      @$title=$row['title'];
      @$author=$row['author'];
      $row1=mysqli_fetch_array($query_run1,MYSQLI_ASSOC);
      @$username=$row1['username'];
      @$email=$row1['email'];

          
           $query="insert into issue_book values('$username','$stid','$title','$author','$id','$email','$issuedate','$returndate')";
           $query_run=mysqli_query($con,$query);

          if($query_run)
          {
           $query= "DELETE FROM book WHERE id ='$id'";
           $query_run= mysqli_query($con,$query);
           echo '<script type="text/javascript">alert("BOOK ISSUED SUCCESSFULLY")</script>';
           header("Location:issuebook.php?f=1");
          }
         else
         {
         echo '<script type="text/javascript">alert("BOOK NOT ISSUED .....ERROR")</script>';

         }
      }
    
      else
      {
        echo '<script type="text/javascript">alert("STUDENT DOES NOT EXISTS")</script>';
     header("Location:issuebook.php?h=1"); 
      }
  }
     
   else
   {
     echo '<script type="text/javascript">alert("INVALID ENTRIES......PLEASE INSERT VALID ENTRIES")</script>';
     header("Location:issuebook.php?g=1");
   }       

?>