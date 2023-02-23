<?php
session_start();
// $host = "localhost";  
// $user = "id20335682_das_db";  
// $password = "DaS!2022.+++";

// $db_name = "id20335682_appointment_system"; 

$host = "localhost";  
$user = "root";  
$password = "";

$db_name = "id20335682_appointment_system"; 

  $conn = mysqli_connect($host, $user, $password, $db_name);

  if(!$conn){
     echo "Connection failed!";
  }
?>