<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctor_side_css/doctor_appointment.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="icon" type="image/png" href="../images/website icon.png">
    <title>Agenda | Doctor Dashboard | Doctor Appointment System</title>
</head>
<body>     
<center>
    <div class = "calendar">
    <p class = "calendar_header"><i class = "far fa-calendar-alt"></i> Today's Date</p>
    <p class = "calendar_timezone">
        <?php
        date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d');
        echo $date;
        ?>
    </p>
    </div>
    </center>

<div class="sidebar">
 <header class="title">Doctor Dashboard</header>
 <center>
 <div class="docprofileimg"><img src="../images/doc profile img 2.png"  alt="doctor image profile" width="120" height="120"></div>
 <div class="docname">Dr. David Chrish</div>
 <div class="specialty">Cardiologist</div>
</center>
 <ul>
     <li><a href="../doctor_side/doctor_dashboard.php" ><i class="fas fa-clinic-medical"></i>Home</a></li>
     <li><a href="../doctor_side/doctor_appointment.php" class="active"><i class="fas fa-calendar"></i>Agenda</a></li>
     <li><a href="../index_main.html"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
 </ul>
</div>
   <section></section>

   
<div class="docappoint">
        <h1>APPOINTMENTS</h1>
</div>
<div class="docadapp">
    <h2>Successfully Added Appointments</h2>
</div>

        <div class="container">
    <table class="table">
        <thead class="thead">
            <tr class="list">
                <th class="user">Patient</th>
                <th class="status">Status</th>
                <th class="date">Date</th>
                <th class="home address">Home Address</th>
                <th class="location">Province</th>
                <th class="phone">Phone</th>
                <th class="viewmore">Details</th>
                <!-- <th class="action">Action</th> -->
            </tr>
        </thead>
        <tbody class="tbody">
            <tr class="list">
                <th class="user">
                    <img src="/images/patient male img.png" alt="" class="icon">
                    <div class="name-or-userName">
                        <div class="name">Karl Fredrick</div>
                        <div class="user-name">karlfredrick@gmail.com</div>
                    </div>
                </th>
                <th class="status">
                    <div class="complete">Successful</div>
                </th>
                <th class="date">April 20, 2023</th>
                <th class="home address">711 T. Alonzo Street1003</th>
                <th class="location">Manila</th>
                <th class="phone">0931-456-7890</th>
                <th class="viewmore">
                    <a class="button" href="#pat1">View More</a>
                </th>

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
                <h4>Karl Fredrick</h4>
            <h3>Age:</h3>
                <h4>21 years old</h4> 
            <h3>Gender:</h3>
                <h4>Male</h4>
            <h3>Date of Birth:</h3>
                <h4>January 12, 2002</h4>
            <h3>Place of Birth:</h3>
                <h4>250 General Kalentong Street, Mandaluyong City, Philippines</h4>
            <h3>Home Address:</h3>
                <h4>711 T. Alonzo Street1003 Manila, Philippines</h4>
            <h3>Email Address:</h3>
                <h4>karlfredrick@gmail.com</h4>
            <h3>Contact Number:</h3>
                <h4>0931-456-7890</h4>
        </div>
        </center>
	    </div>
    </div>


             <!-- <th class="action">
                    <div class="action-button"> 
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th>  -->
            </tr>
            <tr class="list">
                <th class="user">
                    <img src="/images/patient female img.png" alt="" class="icon">
                    <div class="name-or-userName">
                        <div class="name">Sophia Lurk</div>
                        <div class="user-name">slurk@gmail.com</div>
                    </div>
                </th>
                <th class="status">
                    <div class="complete">Successful</div>
                </th>
                <th class="date">April 26, 2023</th>
                <th class="home address">Unit 7 Columbia Air Freight Center</th>
                <th class="location">Bataan</th>
                <th class="phone">0923-321-1234</th>
                <th class="viewmore">
                    <div class="button">View More</div>
                </th>
                <!-- <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th> -->
            </tr>
            <tr class="list">
                <th class="user">
                    <img src="/images/patient male img.png" alt="" class="icon">
                    <div class="name-or-userName">
                        <div class="name">Matthew Longley</div>
                        <div class="user-name">matthewlongley@gmail.com</div>
                    </div>
                </th>
                <th class="status">
                    <div class="complete">Successful</div>
                </th>
                <th class="date">April 27, 2023</th>
                <th class="home address">135 Katipunan Avenue, St Ignatius</th>
                <th class="location">Manila</th>
                <th class="phone">0939-873-4567</th>
                <th class="viewmore">
                    <div class="button">View More</div>
                </th>
                <!-- <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th> -->
            </tr>
            <tr class="list">
                <th class="user">
                    <img src="/images/patient female img.png" alt="" class="icon">
                    <div class="name-or-userName">
                        <div class="name">Catherine Turner</div>
                        <div class="user-name">kathturner@gmail.com</div>
                    </div>
                </th>
                <th class="status">
                    <div class="incomplete">Waiting</div>
                </th>
                <th class="date">April 30, 2023</th>
                <th class="home address">#14 Pacita Commmercial Center Pacita Avenue</th>
                <th class="location">Laguna</th>
                <th class="phone">0981-477-3214</th>
                <th class="viewmore">
                    <div class="button">View More</div>
                </th>
                <!-- <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th> -->
            </tr>
        </tbody>
    </table>
</div>


        
</div>
</body>
</html>