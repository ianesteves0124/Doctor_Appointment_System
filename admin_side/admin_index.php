<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_side_css/admin_index.css">
    <link rel="icon" type="image/png" href="../images/website icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Administrator</title>
</head>
<body>
    <div class = "navigation-sidebar">
    <header class = "title" style="cursor: default;">Administrator</header>
    <center>
        <div class = "adminprofile"><img src="../images/adminprofile.png" alt="administrator profile" width = "120" height = "120"></div>
    </center>
    <ul>
        <li><a href="admin_dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
        <li><a href="admin_doctor.php"><i class="fas fa-user-md"></i>Doctors</a></li>
        <li><a href="admin_appointment.php"><i class="fas fa-calendar"></i>Appointment</a></li>
        <li><a href="admin_patient.php"><i class="fab fa-accessible-icon"></i>Patients</a></li>
        <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>
    </div>
    </div>

    <div class = "calendar" style="cursor: default;">
    <p class = "calendar_header"><i class = "far fa-calendar-alt"></i> Today's Date</p>
    <p class = "calendar_timezone">
        <?php
        date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d');
        echo $date;
        ?>
    </p>
    </div>
</body>
</html>