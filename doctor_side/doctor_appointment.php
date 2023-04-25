<?php 
             include('../database/security.php');
            $useremail = $_SESSION['usermemail'];
            $docsql = "SELECT * FROM doctor WHERE doctor_email = '".$_SESSION['usermemail']."'";
            $usersql = mysqli_query($conn,$docsql);
            $user_fetch = mysqli_fetch_assoc($usersql);
            $userid = $user_fetch['doctor_id'];
            $username = $user_fetch['doctor_name'];
            $user_spe = $user_fetch['specialty'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctor_side_css/doctor_appointment.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="icon" type="image/png" href="../images/website icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Agenda | Doctor Dashboard | Doctor Appointment System</title>
</head>
<body style="cursor: default; font-family:monospace;">     
<center>
    <div class = "calendar">
    <p class = "calendar_header"><i class = "far fa-calendar-alt"></i> Today's Date</p>
    <p class = "calendar_timezone" style="margin-top:-20px;">
        <?php
        date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d');
        echo $date;
        ?>
    </p>
    </div>
</center>
<div class="sidebar" style="margin-top:-20px;">
    <header class="title">DOCTOR</header>
    <center>
        <div class="docprofileimg"><img src="../images/doc profile img 2.png"  alt="doctor image profile" width="120" height="120"></div>
        <div class="docname"><?php echo substr($username,0,50)?></div>
        <div class="specialty"><?php echo substr($user_spe,0,50)?></div>
    </center>
    <ul style="margin-left:-20px;">
        <li><a href="../doctor_side/doctor_dashboard.php" ><i class="fas fa-clinic-medical"></i>Home</a></li>
        <li><a href="../doctor_side/doctor_appointment.php" class="active"><i class="fas fa-calendar"></i>Agenda</a></li>
        <li><a href="../index_main.html"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
    </ul>
</div>
   <section>

   </section>
   
<div class="docappoint">
        <h1 style="font-weight:700; font-size:32px; margin-top:3px;">APPOINTMENTS</h1>
</div>
<div class="docadapp">
    <h2 style="font-weight:700; font-size:16px; margin-top:3px;">Successfully Added Appointments</h2>
</div>

<div class="container" style="margin-left:265px; margin-top:0px; width:80%;">
    <table class="table">
        <thead class="thead">
            <tr class="list">
                <th class="user">Patient</th>
                <th class="status">Status</th>
                <th class="date">Appointment Date</th>
                <th class="home address">Home Address</th>
                <th class="phone">Phone</th>
                <th class="viewmore">Details</th>
                <!-- <th class="action" style="text-align:center;">Action</th> -->
            </tr>
        </thead>

        <tbody class="tbody">
            <?php

                $patient_list = "SELECT * FROM `booking`
                INNER JOIN doctor ON booking.doc_id = $userid LIMIT 1";
                $fetch_data = mysqli_query($conn,$patient_list);
                while ($row = mysqli_fetch_assoc($fetch_data)) {
                    echo '
                        <tr class="list">
                <th class="user">
                    <img src="../images/patient male img.png" alt="" class="icon">
                    <div class="name-or-userName">
                        <div class="name">'.$row['patient_name'].'</div><br>
                        <div class="user-name">'.$row['patient_email'].'</div>
                    </div>
                </th>
                <th class="status">
                    <div class="complete">Accepted</div>
                </th>
                <th class="date">'.$row['patient_app-date'].'</th>
                <th class="home address">'.$row['patient_address'].'</th>
                <th class="phone">'.$row['patient_contact'].'</th>
                <th class="viewmore">
                    <a class="btn btn-light  btn-sm" href="#pat1">View More</a>
                </th>
                        <!-- <th class="action">
                            <center>
                        <button type="button" class="btn btn-success btn-sm" style="margin-bottom:5px;">ACCEPT</button>
                        <button type="button" class="btn btn-danger btn-sm">REJECT</button>
                            </center>
                        </th> -->
            
                <!-- Popup View More -->
                    <div id="pat1" class="overlay">
                        <div class="popup">
                            <center>
                                <h1>PATIENT INFORMATION</h1>
                                <a class="close" href="#">&times;</a>
                            </center>
                            <center>
                                <div class="content">
                                    <h3>Full Name:</h3>
                                        <h4>'.$row['patient_name'].'</h4>
                                    <h3>Age:</h3>
                                        <h4>'.$row['patient_age'].'</h4> 
                                    <h3>Gender:</h3>
                                        <h4>'.$row['patient_gender'].'</h4>
                                    <h3>Date of Birth:</h3>
                                        <h4>'.$row['patient_dob'].'</h4>
                                    <h3>Home Address:</h3>
                                        <h4>'.$row['patient_address'].'</h4>
                                    <h3>Email Address:</h3>
                                        <h4>'.$row['patient_email'].'</h4>
                                    <h3>Contact Number:</h3>
                                        <h4>'.$row['patient_contact'].'</h4>
                                </div>
                            </center>
                        </div>
                    </div>
            </tr> 
                    ';
                }

            ?>
            
        </tbody>
    </table>
</div>


        
</div>
</body>
</html>