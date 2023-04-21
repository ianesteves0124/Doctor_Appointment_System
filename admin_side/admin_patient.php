<?php
include('admin_index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_side_css/admin_patient.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Patient</title>
</head>
<body>
    <div class="title">
        <h1 class="maintitle">Patients</h1>
            <h2 class="subtitle">Consider the patients with the best Doctor's Appointment System.</h2>
    </div>

<center>
    <table class="table table-hover" style="width:80%; margin-left:255px; margin-top:-10px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Contact Num</th>
      <th scope="col">Home Address</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <!-- <th scope="row">1</th> -->
      <td>Joe Doe</td>
      <td>21</td>
      <td>Male</td>
      <td>2002-04-20</td>
      <td>09614565232</td>
      <td>Kalaklan 14 St. Olongapo City</td>
      <td>jd@gmail.com</td>
      <td><a  type="button" class="btn btn-danger">Delete</a></td>
    </tr>
    <tr>
    <!-- <th scope="row">2</th> -->
      <td>Michael Goat</td>
      <td>25</td>
      <td>Male</td>
      <td>1995-02-29</td>
      <td>09664214678</td>
      <td>New Kababae 9 St. Olongapo City</td>
      <td>mg@gmail.com</td>
      <td><a  type="button" class="btn btn-danger">Delete</a></td>
    </tr>
    <tr>
      <!-- <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td> -->
      <!-- <th scope="row">3</th> -->
      <td>Kobe Venom</td>
      <td>23</td>
      <td>Male</td>
      <td>1998-01-15</td>
      <td>09998334123</td>
      <td>Pag-asa 17 St. Olongapo City</td>
      <td>kobe@gmail.com</td>
      <td><a  type="button" class="btn btn-danger">Delete</a></td>
    </tr>
  </tbody>
</table>
</center>

</body>
</html>