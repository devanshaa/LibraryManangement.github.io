<?php
session_start(); 
$id=$_POST['id'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
if(!$con)
  echo "Connection failed";
else
	echo "Connection done";
mysqli_select_db($con,'db');
$q="select * from register_librarian";
$result = mysqli_query ( $con , $q );
$flag=0;
while($a = mysqli_fetch_array($result))
{
	if($a[1]==$id and $a[2]==$password)
	{
		$flag=1;
		 $username=$a['username'];
		$_SESSION['username_l'] = $username;
		$_SESSION['id_l']=$id;
	}

}
if($flag==1)
{
	header("Location: librarianrights.php?g=1");
}
else
{
	header("Location:librarianlogin.php ?f=1");
}
mysql_close($con);
	
 ?>