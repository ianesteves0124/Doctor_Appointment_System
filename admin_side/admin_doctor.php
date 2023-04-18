<?php
include('../database/connection.php');
include('admin_index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_side_css/admin_doctor.css">
    <title>Doctors</title>
</head>
<body>
    <table>
    <tr>
    <td>
        <p class = "sub_headings">Add New Doctor</p>
    </td>
    <td>
    <a href="add_doctor.php" class = "add_new"><i class = "fas fa-plus"></i> Add New</a>
    </td>
</tr>
    </table>
<center>
    <table  width = "89%" class="sub-table">
    <thead>
        <tr>
            <th class = "header">Doctor Name</th>
            <th class = "header">Email</th>
            <th class = "header">Specialty</th>
            <th class = "header">Contact</th>
            <th class = "header">Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php

            $sql = 'SELECT * FROM `doctor`';
            $result = mysqli_query($conn,$sql);

            while ($row = mysqli_fetch_assoc($result)) 
            {
                 echo '<tr class = "list_doctor">';
                 echo '<td>'. $row['doctor_name'].'</td>';
                 echo '<td>'. $row['doctor_email'].'</td>';
                 echo '<td>'. $row['specialty'].'</td>';
                 echo '<td>'. $row['address'].'</td>';
                 echo '<td>'. $row['contact'].'</td>';
                 echo '<td>';
                 echo ' <a  type="button" class="event-btn" href="edit_doctor.php?action=edit & id='.$row['doctor_id'].'">EDIT</a> ';
                 echo ' <a  type="button" class="event-btn" href="delete_doctor.php?type=doctor&delete & id=' . $row['doctor_id'].'">DELETE</a>';
                 echo '</td>';
                 echo '</tr> ';
            }
        ?>
                            
    </tbody>
    </table>
</center>
</body>
</html>