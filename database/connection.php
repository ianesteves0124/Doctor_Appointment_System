<?php
$host = "localhost";  
$user = "db_das";  
$password = "xcZaNsWYCRDxRhcR";
$db_name = "db_das"; 

  $conn = mysqli_connect($host, $user, $password, $db_name);

  if(!$conn){
     echo "Connection failed!";
  }
?>