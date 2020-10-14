<?php
session_start(); 
require 'database.php';

					
if(isset($_GET['f']))
{
	//header("refresh:5;adminlogin.php");
	//echo"invalid user";
	echo("<script>alert('NO SUCH USER EXISTS....')</script>");
	//echo("<script>window.location='adminlogin.php';</script>");
  
   header("Refresh:0.1;adminlogin.php");
}				
	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Admin login
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,intitial-scale=1">
		        <link rel="stylesheet" href="cap.css">

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

	<script language="javascript" type="text/javascript">
	
	window.history.forward();
	function noBack() { 
		window.history.forward();
 }
	
</script>
</head>
<body  onload="noBack();" 
	onpageshow="onpageshow=if (event.persisted) noBack();" onunload="">
	<header style="width: 1536px; height: 100px; background-color: black;">
		<h1 style="color: white;font-size: 30px; transform: translate(0px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		<nav class="list-group list-group-horizontal " style="float: right;">
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="home.php">HOME</a></li>
			
			<li class="list-group-item list-group-item-link active " style="background-color: black;"><a href="adminlogin.php">ADMIN</a></li>
			
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="home.php">BACK</a></li>
		</nav>	
	</header>

	<section  style="width: 1536px;height:675px; background-color: grey; background-image: url(images/admin1.jpg);">
		
			<div class="box">
				<div class="container">
					<form action="adminlogin1.php" method="post" onsubmit="return checkform(this);">

					<div style="height: 500px; width: 500px; position: absolute; right: 0px; top: -35px; background-color: rgba(150,163,154,0.5); border-radius: 20px;">

						<div class="form-group" >
							<h1 style="font-size: 30px; font-family: cordana; text-align: center; font-weight: bold;">ADMIN  LOGIN FORM :</h1><hr color="white">

                               <div class="form-group" style="text-align: center;font-size: 20px; font-weight: bold;" >
          
           <label for="inputEmail4">USERNAME :</label>
           <input type="text" class="form-control" name="username" style="width: 300px; margin: 0 auto;" id="inputEmail4" placeholder="Enter your Name" required>
           
           </div>
          <div class="form-group" style="text-align: center; font-weight: bold; font-size: 20px;">
          <label for="id" translate=""> PASSWORD :</label><br>
          <input type="password" class="form-control" style="width: 300px; margin: 0 auto;" name="password" id="password" placeholder="Enter your password" required>
          </div>
             <div class="capbox">
<div class="form-group" style="text-align: center;">
<div id="CaptchaDiv"></div>

<div class="capbox-inner">
<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15">
</div>
</div>
</div>
        	<br><br><br><br><br><div class="form-group" style="text-align: center;font-size: 20px; font-weight: bold;" >
          <input type="submit" class="btn btn-success" align="justify" value="User LogIn" name="login"><br>
							</div>


					  
					</form> 
<script type="text/javascript">
function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}
var alpha = new Array('A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0');
var i;
for (i=0;i<6;i++)
{
var a = alpha[Math.floor(Math.random() * alpha.length)];
var b = alpha[Math.floor(Math.random() * alpha.length)];
var c = alpha[Math.floor(Math.random() * alpha.length)];
var d = alpha[Math.floor(Math.random() * alpha.length)];
var e = alpha[Math.floor(Math.random() * alpha.length)];
}
var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e ;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;
// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>
					        	<div class="form-group" style="text-align: center;font-size: 20px; font-weight: bold;" >

						
					<form action="in2.php" method="post" >
                            <input type="submit" class="btn btn-danger" align="justify" value="Forgot Password" name="login"></form>
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
