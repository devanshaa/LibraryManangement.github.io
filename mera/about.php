<?php 
session_start();
require_once('database.php');


?>
<!DOCTYPE html>
<html>
<head>
  <title>
About  </title>
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
    .boxing{
        margin-left: 5px;
      }
    h2{
      margin-top: 20px;
      width: 50%;
      border-bottom: solid darkred;
      color:darkred;
    }
    .boxi{
      font-size:30px;
      margin-top: 30px;  
      font-weight: bold;
      color:green; 
      font-family: candara;   
    }
    
    .d p{
      margin-top: 20px;
      color:purple;
      font-weight: bold;
    }
    .d{
      margin-top: 20px;
    }
    .p{
      margin-top: 20px;
      font-family: candara;
    }


  </style>
</head>
<body>
    <section style="width: 1536px;height: 1100px; background-color: grey; background-image: url(images/6.jpg);">

  <header style="width: 1536px; height: 100px; background-color: black;">
    <h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    <nav class="list-group list-group-horizontal " style="float: right;">
      
      
      <li class="list-group-item list-group-item-link " style="background-color: black; position: absolute;right: 2px;"><a href="home.php">BACK</a></li>
    </nav>  
  </header>
      <div style="height: 1000px; width :1536px; position: absolute;  ; background-color: rgba(200,163,154,0.8);  border-radius: 20px;">



<div class="boxing">
<h2><b><i>ABOUT</i></b></h2>
<img src="images/5.jpg" width="500" height="200">
<img src="images/6.jpg" width="500" height="200">
<img src="images/8.jpg" width="500" height="200">
<div class="d">
<h2><b>PROJECT ON LIBRARY MANAGEMENT</b></h2>
<p><b>This project is made by  Devansh Agarwal, Avanish Kumar, Prateek Verma and Shristhi Saxena .<br>This is to certified that this project is made during the lockdown period under the guidance of Mr. Ankit Saxena(Assistant Professor in Department of  Computer Science and Engineering).<br>Admin, Student and Librarian can recover their password using email.<br>This project is submitted to the whole department of B.Tech. in computer science and engineering .<br>This project is devloped on Library Management in which there are three logins named admin login and librarian login and student login.<br>The admin has the rights to add , delete, view and update the librarians and their details.Also can add, delete, view and update student and it's detail.<br>The librarian has the rights to add,remove, update and view book also librarian can issue,view ,return books and change it's password.<br>The student can register himself and he can view available and issued books and self issued books in library.Also can change it's password. </b></p>
</div>
<div class="p">
  <h2><b><i>DEVELOPED  BY :</i></b></h2>
  <img src="images/2.jpeg" width="200" height="200">
  <img src="images/4.jpeg" width="200" height="200">
  <img src="images/1.jpeg" width="200" height="200">
  <img src="images/3.jpeg" width="200" height="200">
</div>
  <div class="boxi">
    <h2><b><i>GUIDED BY :</h2><p>
  Mr. Ankit Saxena(Assistant Professor in Department of Computer Science and Engineering)</p></i></b>
  </div>
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