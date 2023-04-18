<?php
//start session on web page
session_start();

//config-api.php

//Include Google Client Library for PHP autoload file
require_once '../google-api-patient/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('947526388608-mrcluh2emg67pgb1u7at6ilm0c3q3607.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/doctor_Appointment_System/google-api-patient/login_form_patient.php');

// to get the email and profile 
$google_client->addScope('email');
$google_client->addScope('profile');

$host = "localhost";  
$user = "root";  
$password = "";
$db_name = "id20335682_appointment_system"; 

  $conn = mysqli_connect($host, $user, $password, $db_name);

  if(!$conn){
     echo "Connection failed!";
  }

?>