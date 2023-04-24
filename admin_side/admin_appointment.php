<?php
include('admin_index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_side_css/admin_appointment.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Appointment</title>
</head>
<body>
    <div class="title" style="cursor: default;">
        <h1 class="maintitle">Appointments</h1>
            <h2 class="subtitle">Peek at the schedule of events with the best Doctor's Appointment System.</h2>
    </div>

<center>
    <table class="table table-hover" style="width:80%; margin-left:250px; margin-top:-10px; cursor:default;">
  <thead>
    <tr>
      <th scope="col" style="width:15%;">Appt Number</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Doctor</th>
      <th scope="col">Appointment Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Joe Doe</td>
      <td>Dr. Ian Miles Esteves</td>
      <td>2023-04-20</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Michael Goat</td>
      <td>Dr. Nathaniel Pagulayan</td>
      <td>2023-04-29</td>
    </tr>
    <tr>
      <!-- <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td> -->
      <th scope="row">3</th>
      <td>Kobe Venom</td>
      <td>Dr. Appointment</td>
      <td>2023-05-06</td>
    </tr>
  </tbody>
</table>
</center>

</body>
</html>