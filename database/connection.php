<?php
$host = "localhost";  
$user = "root";  
$password = "";
$db_name = "id20335682_appointment_system"; 

  $conn = mysqli_connect($host, $user, $password, $db_name);

  if(!$conn){
     echo "Connection failed!";
  }
?>