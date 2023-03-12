<?php // FETCH DATA OF DOCTOR INFO AT DATABASE
require_once('database/fetch_data.php');
$query ="SELECT doctor_info.Doctor_ID,doctor_info.Name,doctor_info.Description,doctor_info.Contact, Doctor_Specialty.Specialty_Title FROM doctor_info,Doctor_Specialty WHERE doctor_info.Doctor_ID=Doctor_Specialty.ID;"; // BRIDGE TYPE TABLE SEPARATED DOCTOR INFO TO ITS SPECIALTY
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctor_side_css/doctor_list.css">
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
                             <td><?php echo $row['Doctor_ID'] ?></td>
                             <td><img src="../images/profile icon.png" alt="profile icon" width="40" height="40"></td>
                             <td><?php echo $row['Name'] ?></td>
                             <td><?php echo $row['Specialty_Title'] ?></td>
                             <td><?php echo $row['Description'] ?></td>
                             <td><?php echo $row['Contact'] ?></td>
                             <td><?php echo $row['Clinic_Address'] ?></td>
                             <td> <button onclick = "location.href = '../topnav/book_form.php'">Select</button></td>
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