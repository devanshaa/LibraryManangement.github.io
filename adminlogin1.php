<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
if(!$con)
  echo "Connection failed";
else
	echo "Connection done";
mysqli_select_db($con,'db');
$q="select * from register_admin";
$result = mysqli_query ( $con , $q );
$flag=0;
while($a = mysqli_fetch_array($result))
{
	if($a[0]==$username and $a[1]==$password)
	{
		$flag=1;
		$_SESSION['username_a']=$username;
	}

}
if($flag==1)
{
	header("Location: admin.php?g=1");
}
else
{
	header("Location:adminlogin.php ?f=1");
}
mysql_close($con);
	
 ?>