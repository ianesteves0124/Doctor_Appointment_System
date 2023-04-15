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
            // $sql = "SELECT * FROM `doctor`";
            $sql = "SELECT * FROM `doctor`";
            $result = mysqli_query($conn,$sql);

            while ($row = mysqli_fetch_assoc($result)) 
            {
                
               ?>
               <tr class = "list_doctor">
                <td><?php echo $row['doctor_name']?> </td>
                <td><?php echo $row['doctor_email']?> </td>
                <td><?php echo $row['specialty']?> </td>
                <td><?php echo $row['contact']?> </td>
                <td>
                    <div class = "event-btn">
                        <a href="edit_doctor.php">
                            <i class = "far fa-edit"></i>UPDATE
                        </a>
                        <a href="delete_doctor.php">
                            <i class = "far fa-trash-alt"></i>DELETE
                        </a>
                    </div>
                </td>
               </tr>
               <?php
               
            }
            ?>
        
    </tbody>
    </table>
</center>
</body>
</html>