<?php include('header_nav.php'); ?> <!-- TO CALL TOP NAVIGATIONS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_page.css">
    <title>Doctor Appointment System indexhome page</title>
</head>
<body>

<div class ="first_tab">
    <h1 class ="f_start_line">We are bridging the Patient-Doctor Communication Gap</h1>
    <h2 class = "f_second_line">You won't forget ever again your Doctor's Appointments!</h2>
    <button class = "bookbtn" onclick = "location.href = 'sechome_page.php'"><span>Book Now!</span></button>
    <!-- <button class = "prevbtn" onclick = "location.href = '#'">Previous</button>
    <button class = "nxtbtn" onclick = "location.href = '#'">Next</button> -->
   
    <!-- <div class="center">
  <div class="pagination">
   <a href="#">&laquo;</a> -->
  <!-- <a href="home_page.php" class="active">1</a>
  <a href="sechome_page.php">2</a>
  <a href="thirdhome_page.php">3</a>
  <a href="fourthhome_page.php">4</a>
  <a href="about_page.php">5</a> -->
  <!-- <a href="#">&raquo;</a> -->
  </div>
</div> 
</div>

<div class="pagination">

        <ul class="pagination--link">

            <li> <a href="#" class="prev"> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> </a></li>
            <li> <a href="home_page.php" class="active"> 1 </a></li>
            <li> <a href="sechome_page.php"> 2 </a></li>
            <li> <a href="thirdhome_page.php"> 3 </a></li>
            <li> <a href="fourthhome_page.php"> 4 </a></li>
            <li> <a href="about_page.php"> 5 </a></li>
            <li> <a href="#"> ... </a></li>
            <li> <a href="#" class="next"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a></li>

        </ul>
    </div>

<!-- <div class = "second_tab">
    <h1 class ="s_start_line">"WE ARE COMMITTED TO YOUR HEALTH, CARING FOR LIFE." </h1>
    <h2 class = "s_second_line">View the various professionals and services we offer</h2> -->
    <!-- <img class = "s_image" src="/images/Picture2.png" alt="DOCTOR 2"> -->
</div>
</div>
</body>
</html>