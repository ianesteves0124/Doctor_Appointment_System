<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/patient_side_css/book_page.css">
    <link rel="icon" type="image/png" href="../images/website icon.png">
    <title>Appointment Request | Doctor Appointment System</title>
</head>
<body style="cursor: default;">
<!-- TO CALL TOP NAVIGATIONS -->
<?php include('header_nav.php');?> 
<div class="appreq">
        <h1>APPOINTMENT REQUEST</h1>
</div>
<center>
 <div class="container">
    <table class="table">
        <thead class="thead">
            <tr class="list">
                <th class="user">Doctor</th>
                <th class="specialty">Specialty</th>
                <th class="date">Appointment Date</th>
                <th class="phone">Doctor Contact</th>
                <th class="action">Action</th>
            </tr>
        </thead>

        <tbody class="tbody">
            <?php
              include '../database/connection.php';

              $query = "SELECT * FROM booking
              INNER JOIN website_user ON booking.patient_email = website_user.Email
              INNER JOIN doctor ON booking.doc_id = doctor.doctor_id;";
              $result = mysqli_query($conn,$query);

              while ($row = mysqli_fetch_assoc($result))
              {
                echo 
                '
                <tr class="list">
                    <th class="user">
                        <img src="../images/doc profile img 2.png" alt="" class="icon">
                        <div class="name-or-userName">
                            <div class="name">'. $row['doctor_name'].'</div>
                            <div class="user-name">'. $row['specialty'].'</div>
                        </div>
                    </th>
                    <th class="specialty">'. $row['specialty'].'</th>
                    <th class="date">'. $row['patient_app-date'].'</th>
                    <th class="phone">'. $row['contact'].'</th>
                    <th><a class="button" href="#">View More</a></th>
                 </tr>
                ';
              }
            ?>
            
        </tbody>
    </table>
</div>
</center>




</body>
</html>