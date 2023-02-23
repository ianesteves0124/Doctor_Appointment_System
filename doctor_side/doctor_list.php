<?php // FETCH DATA OF DOCTOR INFO AT DATABASE
require_once('database/fetch_data.php');
$query ="SELECT * FROM `doctor_info` WHERE `Specialty` = 'Primary Care & General Medicine';"; // BRIDGE TYPE TABLE SEPARATED DOCTOR INFO TO ITS SPECIALTY
$result = mysqli_query($conn,$query);
?>
<?php
include('../topnav/header_nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="doctor_list.css">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <div class = "row">
            <div class = "column">
                <div class = "list_header">
                    <h2>LIST OF DOCTORS</h2>
                </div>
                <div class = "list_body">
                    <table>
                        <tr class = "list_table_header">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Specialty</td>
                            <td>Description</td>
                            <td>Contact</td>
                            <td>Clinic Address</td>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                             ?>
                             <td><?php echo $row['ID'] ?></td>
                             <td><?php echo $row['Name'] ?></td>
                             <td><?php echo $row['Specialty'] ?></td>
                             <td><?php echo $row['Description'] ?></td>
                             <td><?php echo $row['Contact'] ?></td>
                             <td><?php echo $row['Clinic Address'] ?></td>
                             <td> <button>Select</button></td>
                        </tr>
                           <?php
                            }
                            
                            ?>
                    </table>
                </div>

            </div>
        </div>
    </div>
</body>
</html>