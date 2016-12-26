<?php 
  session_start(); 
  require 'includes/connect.php';
  
  if(!$_SESSION['username'])  
  { 
      header("Location: index.php"); 
  } 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h5>Landing page</h5>
<a href="logout.php">logout ni baii!!</a>
</body>
</html>