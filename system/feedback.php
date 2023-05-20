<?php 
ob_start(); 
require 'config.php';

$name = $_POST['firstname'];
$comments = $_POST['comments'];
$email = $_POST['email'];


$query = mysqli_query($conn, "INSERT INTO `poll`(`id`, `name`, `email`, `suggestions`) VALUES ('','$name','$email','$comments')");


echo '<script>
		alert("Thank You For Your Feedback!");
        window.location.href="index.php";
	  </script>';
?>
