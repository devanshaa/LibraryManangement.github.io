<?php 
require_once('database.php');
if(isset($_GET['f']))
{

	header("Refresh:0.1;url=registrationform.php");
	echo '<script type="text/javascript">alert("USER ALREADY EXISTSt....PLEASE TRY ANOTHER ID")</script>';


}
elseif(isset($_GET['g']))
{
	header("Refresh:0.1;url=registrationform.php");
	 echo '<script type="text/javascript">alert("REGISTRATION SUCCESSFUL")</script>';

}
elseif (isset($_GET['h'])) {
	header("Refresh:0.1;url=registrationform.php");
	 echo '<script type="text/javascript">alert("ERROR")</script>';

}
elseif (isset($_GET['i'])) {
	header("Refresh:0.1;url=registrationform.php");
	 echo '<script type="text/javascript">alert("PASSWORD AND CONFIRM PASSWORD DOES NOT MATCH")</script>';

}



?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Student Registration Form
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,intitial-scale=1">
				        <link rel="stylesheet" href="cap1.css">

	<style>
		body
	 	{
	 		width:1400px;
	 		height: 612px;
	 	}
		a
		{
			color: white;
			font-family: candara;
			font-size: 20px;
			line-height:20px;
			font-weight: bold;
		}
		li
		{
			text-decoration: none;
			display: inline-block;
		}
		ul{
			word-spacing: 10px;
		}
		footer
		{
			width: 1536px;
			height: 80px;
			background-color: black;
		}
		.registrationform
		{
			width: 1536px;
			height: 577px;
			background-color: none;
		}
		.box{
			width:500px;
			height: 550px;
			color: white;
			transform: translate(518px,15px);
			background-color: none;
			
		}
		#para
		{
			color: red;
			font-size: 20px;
			font-weight: bold;
			font-family: candara;
			font-style: underline;
		}

	</style>
</head> 
<body>
	<header style="width: 1536px; height: 90px; background-color: black;">
		<h1 style="color: white;font-size: 30px; transform: translate(5px,30px);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		<nav class="list-group list-group-horizontal " style="float: right; position: absolute;right: 20px; top: 30px;">
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="home.php">HOME</a></li>
			<li class="list-group-item list-group-item-link active " style="background-color: black;"><a href="registrationform.php">NEW USER</a></li>
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="studentlogin.php">STUDENT LOGIN</a></li>
			
			
			<li class="list-group-item list-group-item-link " style="background-color: black;"><a href="studentlogin.php">BACK</a></li>
		</nav>	
	</header>

	<section  style="width: 1536px;height: 675px; background-color: grey; background-image: url(images/regis1.jpg); ">
			<div><marquee>
			<p id="para">***IF YOU ARE NOT A NEW USER AND HAVE ALREADY SIGN UP THAN KINDLY GO TO LOGIN PAGE AND LOGIN...***</p>
			</marquee></div>

		<div style="height: 650px; width :850px; position: absolute; right:320px; top: 100px; background-color: rgba(178,163,154,0.5);  border-radius: 20px;">\
						<br><h2 style="color:white; font-family: candara;font-weight: bold; text-align: center;">STUDENT REGISTRATION DETAILS :</h2>
		<hr color="white" width="600" length="20">
			<form  action="registrationform1.php" method="post" onsubmit="return checkform(this);"><br>
  
		  <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white;">
		    <div class="form-group col-md-6">
		      NAME:
		      <input type="text" class="form-control" style="width: 350px; margin: 0 auto;" name="username" id="inputEmail4" placeholder="Enter Your Name" required >
		    </div>
		    <div class="form-group col-md-6">
		      STUDENT ID :
		      <input type="text" class="form-control" name ="id"  style="width: 350px; margin: 0 auto;" id="id" placeholder="Enter Your Id" required>
		    </div>
		 </div>

		 <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white; ">
		    <div class="form-group col-md-6">
		       COURSE:
         							<input list="my" placeholder="COURSE" style=" width: 350px; margin: 0 auto;" class="form-control" name="course" required>
							<datalist id="my">
								<option value="B.TECH"></option>
								<option value="BBA"></option>
								<option value="BSC"></option>
								<option value="BJMC"></option>
								<option value="BIO.TECH"></option>
								<option value="BCA"></option>
								<option value="B.COM"></option>
								<option value="Fashion Designer"></option>



							</datalist>
		    </div>
    

		    <div class="form-group col-md-6" style="text-align: center; font-weight: bold; font-size: 20px;">
		     SEMESTER:
                    <input list="sem" class="form-control" style=" width: 350px; margin: 0 auto;" placeholder="SEMESTER" name="semester" required>
							<datalist id="sem">
								<option value="1"></option>
								<option value="2"></option>
								<option value="3"></option>
								<option value="4"></option>
								<option value="5"></option>
								<option value="6"></option>
								<option value="7"></option>
								<option value="8"></option>


							</datalist>
		    </div>
		 </div>
		 <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white;">
		    <div class="form-group col-md-6">
		      PHONE NO:
		      <input type="text" class="form-control" name="phoneno"  style="width: 350px; margin: 0 auto;" id="issue" placeholder="Enter Your Phone Number" pattern="(?=.*\d).{10,}" title="Must contain at least 10 number" required>
		    </div>
		    <div class="form-group col-md-6">
		      EMAIL ID:
		      <input type="email" class="form-control" name ="email"  style="width: 350px; margin: 0 auto;" id="return" placeholder="Enter Your Email Address" required>
		     <!-- pattern="(?=.*\d).{10,}" title="Must contain at least 10 number" -->
		    </div>
		 </div>
		 <div class="form-row" style="text-align: center; font-weight: bold; font-size: 20px; color: white;">
		    <div class="form-group col-md-6">
		      PASSWORD:
		      <input type="password" class="form-control" name="password"  style="width: 350px; margin: 0 auto;" id="issue" placeholder="Enter Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		    </div>
		    <div class="form-group col-md-6">
		      CONFIRM PASSWORD:
		      <input type="password" class="form-control" name ="cpassword"  style="width: 350px; margin: 0 auto;" id="return" placeholder="Confirm Your Password" >
		     <!-- pattern="(?=.*\d).{10,}" title="Must contain at least 10 number" -->
		    </div>
		 </div>

		  <br>
           
		
          </div> 
              <div class="capbox" style="position: absolute; right: 640px; top: 550px;">
<div class="form-group" style="text-align: center;">
<div id="CaptchaDiv"></div>

<div class="capbox-inner">
<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15">
</div>
</div>
</div>
        	
						
							<div class="form-group" style="text-align: center;font-size: 20px; font-weight: bold; position: absolute;right: 650px; top: 680px;" >
							<input type="submit" class="btn btn-success" style="width: 200px;" align="justify" value="Register" name="signup">
							</div>
							
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
var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0');
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