<?php 
session_start();
session_destroy();
session_unset();
header("Refresh:0.1;url=home.php");



 ?>