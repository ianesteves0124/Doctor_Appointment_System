<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Doctor Dashboard | Doctor Appointment System</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../schedule/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/doctor_side_css/doctor_dashboard.css">
    <link rel="stylesheet" href="../schedule/fullcalendar/lib/main.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="icon" type="image/png" href="../images/website icon.png">
    <script src="../schedule/js/jquery-3.6.0.min.js"></script>
    <script src="../schedule/js/bootstrap.min.js"></script>
    <script src="../schedule/fullcalendar/lib/main.min.js"></script>
  </head>
  <body>
  <!-- <center>   
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
    </center> -->
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
        <li><a href="../doctor_side/doctor_dashboard.php" class="active"><i class="fas fa-clinic-medical"></i>Home</a></li>
        <li><a href="../doctor_side/doctor_appointment.php"><i class="fas fa-calendar"></i>Agenda</a></li>
        <li><a href="../index_main.html"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
    </ul>
   </div>
</body>
   

<center>
   <body class="bg-light">
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="../schedule/save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">

                                <label for="title" class="control-label">Title</label><br>
                                    <select name="title" id="title">
                                        <option value="Available">Available</option>
                                        <option value="Not Available">Not Available</option>
                                    </select>

                                    <!-- <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required> -->
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
</center>
<?php 
$conn=new mysqli("localhost","root","","id20335682_appointment_system");
$schedules = $conn->query("SELECT * FROM `schedule_list`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="../schedule/js/script.js"></script>


</html>
  

