<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctor_side_css/doctor_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="icon" type="image/png" href="../images/website icon.png">
    <title>Home | Doctor Dashboard | Doctor Appointment System</title>
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
    <div class="docprofileimg"><img src="../images/doc profile img 2.png"  alt="doctor image profile" width="120" height="120"></div>
    <div class="docname">Dr. David Chrish</div>
    <div class="specialty">Cardiologist</div>
</center>
    <ul>
        <li><a href="../doctor_side/doctor_dashboard.php" class="active"><i class="fas fa-clinic-medical"></i>Home</a></li>
        <li><a href="../doctor_side/doctor_appointment.php"><i class="fas fa-calendar"></i>Agenda</a></li>
        <!-- <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li> -->
        <!-- <li><a href="#"><i class="fas fa-user"></i>About Me</a></li>
        <li><a href="#"><i class="fas fa-envelope"></i>Contact Me</a></li> -->
        <li><a href="../index_main.html"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
    </ul>
   </div>
   <section></section>
   <div id="calendar"></div>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
</body>
<script src="../doctor_side/event_calendar.js"></script>
</html>