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
        <h1 class="datetimetitle">Today's Date and Time | <i class="fas fa-calendar-alt fa-2x"></i></h1>
<h2 id="current_date" class="displaydate"></h2>
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = day + "-" + month + "-" + year;
</script>

<h2 id="current-time" class="displaytime">12:00:00</h2>
<script>
    let time=document.getElementById("current-time");
    setInterval(()=>{
        let d=new Date();
        time.innerHTML=d.toLocaleTimeString();
    },1000)
    </script>
    </center>
        <div class="sidebar">
    <header class="title">Doctor Dashboard</header>
    <center>
    <div class="docprofileimg"><img src="/images/doc profile img 2.png"  alt="doctor image profile" width="120" height="120"></div>
    <div class="docname">Dr. David Chrish</div>
    <div class="specialty">Cardiologist</div>
</center>
    <ul>
        <li><a href="../doctor_side/doctor_dashboard.php"><i class="fas fa-clinic-medical"></i>Home</a></li>
        <li><a href="../doctor_side/doctor_appointment.php" class="active"><i class="fas fa-calendar"></i>Agenda</a></li>
        <!-- <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li> -->
        <!-- <li><a href="#"><i class="fas fa-user"></i>About Me</a></li>
        <li><a href="#"><i class="fas fa-envelope"></i>Contact Me</a></li> -->
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
                <th class="location">Province</th>
                <th class="phone">Phone</th>
                <th class="contact">Contact</th>
                <th class="action">Action</th>
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
                    <div class="active">Successful</div>
                </th>
                <th class="date">April 20, 2023</th>
                <th class="location">Zambales</th>
                <th class="phone">0931-456-7890</th>
                <th class="contact">
                    <div class="button">Contact</div>
                </th>
                <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th>
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
                    <div class="active">Successful</div>
                </th>
                <th class="date">April 26, 2023</th>
                <th class="location">Bataan</th>
                <th class="phone">0923-321-1234</th>
                <th class="contact">
                    <div class="button">Contact</div>
                </th>
                <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th>
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
                    <div class="active">Successful</div>
                </th>
                <th class="date">April 27, 2023</th>
                <th class="location">Manila</th>
                <th class="phone">0939-873-4567</th>
                <th class="contact">
                    <div class="button">Contact</div>
                </th>
                <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th>
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
                    <div class="inactive">Waiting</div>
                </th>
                <th class="date">April 30, 2023</th>
                <th class="location">Manila</th>
                <th class="phone">0981-477-3214</th>
                <th class="contact">
                    <div class="button">Contact</div>
                </th>
                <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th>
            </tr>
        </tbody>
    </table>
</div>


        
</div>
</body>
</html>