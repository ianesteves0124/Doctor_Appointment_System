<?php include('header_nav.php'); ?> <!-- TO CALL TOP NAVIGATIONS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/patient_side_css/home_page.css">
    <title>Doctor Appointment System</title>
</head>
<body>
<?php
    include '../database/connection.php';
?>
    <div class ="first_tab">
        <center>
            <h1 class ="f_start_line">We are bridging the Patient-Doctor Communication Gap</h1>
            <h2 class = "f_second_line">You won't forget ever again your Doctor's Appointments!</h2>
            <button class = "bookbtn" onclick = "location.href = 'sechome_page.php'"><span>Book Now!</span></button>
        </center>
    </div>

    <div class="pagination">
        <ul class="pagination--link">
            <li> <a href="home_page.php" class="active"> 1 </a></li>
            <li> <a href="sechome_page.php"> 2 </a></li>
            <li> <a href="thirdhome_page.php"> 3 </a></li>
            <li> <a href="fourthhome_page.php"> 4 </a></li>
            <li> <a href="about_page.php"> 5 </a></li>
        </ul>
    </div>
</body>
</html>