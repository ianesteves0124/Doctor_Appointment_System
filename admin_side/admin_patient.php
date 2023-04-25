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
    <div class="title" style="cursor: default;">
        <h1 class="maintitle">Patients</h1>
            <h2 class="subtitle">Consider the patients with the best Doctor's Appointment System.</h2>
    </div>

<center>
    <table class="table table-hover" style="width:80%; margin-left:255px; margin-top:-10px; cursor:default;">
  <thead>
    <tr>
      <th scope ="cole">Patient ID</th>
      <th scope="col">Name</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Contact Num</th>
      <th scope="col">Home Address</th>
      <th scope="col">Email</th>
      <!-- <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>
    <?php
      include '../database/security.php';
      $query = "SELECT * FROM patient";
      $result = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_assoc($result)) {
       echo '<tr>' ;
       echo '<th scope="row">'.$row['patient_id'].'</th>';
       echo '<td>'.$row['patient_name'].'</td>';
       echo '<td>'.$row['patient_dob'].'</td>';
       echo '<td>'.$row['patient_contact'].'</td>';
       echo '<td>'.$row['patient_address'].'</td>';
       echo ' <td>'.$row['patient_email'].'</td>';
      //  echo '<td><a  type="button" class="btn btn-danger">Delete</a></td>';
       echo ' </tr>';

      }
    ?>
    <tr>
  </tbody>
</table>
</center>

</body>
</html>