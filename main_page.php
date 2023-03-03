<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_page.css">
    <title>Doctor Appointment System</title>
</head>
<body>
    

<div class = "center_login">
<img class = "logo" src="./images/DocApp logo.png" alt="Website Logo" width="250" height="170">
<h1>WHAT END USER YOU WANT TO GO?</h1>
<form action="auth_login">
       <div class = "doctor_access">
       <input type="button" onclick="location.href='doctor_side/doctor_login_page.php';" value="DOCTOR" />
    </div>
       <div class = "guest_access">
                <!-- <input type="button" onclick="location.href='topnav/home_page.php';" value="GUEST / PATIENT" /> -->
                <input type="button" onclick="location.href='./topnav/login_form_patient.php';" value="GUEST / PATIENT" />
             </div>

            <!-- Testing-->
</form>
</div>
</body>
</html>