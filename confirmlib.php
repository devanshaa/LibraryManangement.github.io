<?php 
session_start();
require 'database.php';
if (!isset($_SESSION['username_l'])) {
	echo("<script>alert('Please Login First..!')</script>");

	header("Refresh:0.1;url=home.php");
	# code...
}
?>