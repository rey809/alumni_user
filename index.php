<?php  
session_start();  

 if (isset($_SESSION['username'])){
  header("Location: home.php");
 }
?> 

<?php include('includes/header.php'); ?>

<?php include('page-login.php'); ?>
<?php include('page-alumni-validation.php'); ?>
<?php include('page-content.php');?>

<?php include ('includes/footer.php'); ?>
