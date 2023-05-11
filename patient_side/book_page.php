<?php 
            session_start();
            $useremail = $_SESSION['user'];

            include('../database/security.php');
            $patientsql = "SELECT * FROM patient WHERE patient_email = '".$_SESSION['user']."'";
            $usersql = mysqli_query($conn,$patientsql);
            $user_fetch = mysqli_fetch_assoc($usersql);
            $userid = $user_fetch['patient_id'];
            $username = $user_fetch["patient_name"];
            $useremail = $user_fetch["patient_email"];
?>
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
                <th class="specialty">Specialization</th>
                <th class="date">Appointment Date</th>
                <th class="phone">Doctor Contact</th>
                <th class="action">Action</th>
            </tr>
        </thead>

        <tbody class="tbody">
            <?php
              include '../database/connection.php';

              $query = "SELECT * FROM booking
              INNER JOIN doctor ON booking.doc_id = doctor.doctor_id
              WHERE booking.patient_email = '$useremail'";
              $result = mysqli_query($conn,$query);

              while ($row = mysqli_fetch_assoc($result))
              {
                $timestamp = strtotime($row['patient_app-date']);
                $calendarDate = date('F j, Y', $timestamp);
                $doc_id = $row['doc_id'];
                $bookingId = $row['appointment_id'];
                echo  '<tr class="list">';
                echo '<th class="user">';
                echo '<img src="../images/doc profile img 2.png" alt="" class="icon">';
                echo '<div class="name-or-userName">';
                echo '<div class="name">'. $row['doctor_name'].'</div>';
                echo '<div class="user-name">'. $row['specialty'].'</div>';
                echo ' </div>';
                echo ' </th>';
                echo '<th class="specialty">'. $row['specialty'].'</th>';
                echo ' <th class="date">'. $calendarDate.'</th>';
                echo '<th class="phone">'. $row['contact'].'</th>';
                echo ' <th><a class="button" href="#.'.$doc_id.'">View More</a>
                            <a class="button btn-danger btn-sm" href="cancel_booking.php?id='.$bookingId.'">Cancel Booking</a></th>';
                echo '</tr>';

                echo '
                    <!-- Popup View More -->
                    <div id=".'.$doc_id.'" class="overlay">
                        <div class="popup">
                            <center>
                                <h1>DOCTOR INFORMATION</h1>
                                <a class="close" href="#">&times;</a>
                            </center>
                            <center>
                                <div class="content">
                                    <h3>Doctor Name:</h3>
                                        <h4>'. $row['doctor_name'].'</h4>
                                    <h3>Specialty:</h3>
                                        <h4>'. $row['specialty'].'</h4> 
                                    <h3>Description:</h3>
                                        <h4>'. $row['description'].'</h4>
                                    <h3>Email:</h3>
                                        <h4>'. $row['doctor_email'].'</h4>
                                    <h3>Clinic Location:</h3>
                                        <h4>'. $row['clinic_address'].'</h4>
                                    <h3>Schedule:</h3>
                                        <h4>'. $calendarDate.'</h4>
                                </div>
                                    <br><br><br><br><br><br><br><br>
                                     <h1>PATIENT INFORMATION</h1>
                                <div class="content">
                                    <h3>Patient Name:</h3>
                                        <h4>'. $row['patient_name'].'</h4>
                                    <h3>Contact:</h3>
                                        <h4>'. $row['patient_contact'].'</h4> 
                                    <h3>Address:</h3>
                                        <h4>'. $row['patient_address'].'</h4>
                                    <h3>Email:</h3>
                                        <h4>'. $row['patient_email'].'</h4>
                                </div>
                                <div>
                                <br>
                                <a class="button" href="edit_booking.php?id='.$bookingId.'">Edit Booking Application</a>
                                </div>
                            </center>
                        </div>
                    </div>
                 
                ';
              }
            ?>
            
        </tbody>
    </table>
</div>
</center>




</body>
</html>