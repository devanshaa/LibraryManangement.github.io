<?php 
require_once('database.php');

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>
   Librarian Password Recovery  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,intitial-scale=1">
  <style>
    body
    {
      width:1536px;
      height: 762px;
    }
    li
    {
      text-decoration: none;
      display: inline-block;
    }
    ul{
      word-spacing: 10px;
    }
    a
    {
      color: white;
      font-family: candara;
      font-size: 20px;
      line-height:20px;
      font-weight: bold;
    }
    footer
    {
      width: 1536px;
      height: 85px;
      background-color: black;
    }
    .loginform
    {
      width: 1536px;
      height: 577px;
      background-color: none;
    }
    .box{
      width: 400px;
      height: 300px;
      background-color: none;
      transform: translate(600px,100px);
      color: white;

    }

  </style>
</head>
<body>
  <header style="width: 1536px; height: 100px; background-color: black;">
    <h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    <nav class="list-group list-group-horizontal " style="float: right;">
      <li class="list-group-item list-group-item-link " style="background-color: black;"><a href="home.php">HOME</a></li>
      <li class="list-group-item list-group-item-link active " style="background-color: black;"><a href="librarianlogin.php">LIBRARIAN</a></li>
      
      <li class="list-group-item list-group-item-link " style="background-color: black;"><a href="home.php">BACK</a></li>
    </nav>  
  </header>

  <section  style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/librarian1.jpg);">
    <br><br><br>
    <div class="box">
        <div class="container" >


            <div style="height: 390px; width: 400px; position: absolute; right: 50px; background-color: rgba(200,200,200,0.7); border-radius: 20px;">

          <form action="mail1.php"   method="post">
            <div class="form-group" >
              <h1 style="font-size: 30px; font-family: cordana; text-align: center; font-weight: bold;">LIBRARIAN PASSWORD RECOVERY :</h1><hr color="white">
              <div class="form-group" style="text-align: center;color:white; font-size: 20px; font-weight: bold;" >
          
           <label for="inputEmail4">LIBRARIAN ID:</label>
             <input type="text" class="form-control" name="id" style="width: 300px; margin: 0 auto;" id="inputEmail4" placeholder="Enter Your ID" required><br>
               <div class="form-group" style="text-align: center;color:white; font-size: 20px; font-weight: bold;" >
          
           <label for="email"> E-MAIL:</label>
          <input type="text" class="form-control" name="email" style="width: 300px; margin: 0 auto;" id="email" placeholder="Enter Your E-Mail" required>

              <br>
                             <div  style="text-align: center;" >

             <input type="submit" class="btn btn-success" align="justify" value="SUBMIT" name="login">
            
</div></div>
 
            </form>


          
  

                     



          
        </div>
      </div>
      
    
  </section>

  <footer>
    <p style="color: white;text-align: center;font-size: 20px;font-family: Candara;">
        Website:&nbsp www.invertisuniversity.ac.in <br>
        WhatsApp no:&nbsp 9690955599
    </p>
  </footer>

</body>
</html>

