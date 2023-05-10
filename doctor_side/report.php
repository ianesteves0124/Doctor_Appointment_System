<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctor_side_css/doctor_appointment.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="icon" type="image/png" href="../images/website icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Appointment Report</title>
</head>
<style>
        @media print {
            .btn {
                display: none;
            }
        }
    </style>
<body>
<table class="table">
        <thead class="thead">
            <tr class="list">
                <th class="user">Patient</th>
                <!-- <th class="status">Status</th> -->
                <th class="date">Appointment Date</th>
                <th class="home address">Home Address</th>
                <th class="phone">Phone</th>
            </tr>
        </thead>

        <tbody class="tbody">
            <?php
            include '../database/connection.php';
            $docId = $_GET['doc_id'];
            $patient_list = "SELECT * FROM `booking` WHERE doc_id = $docId";
            $fetch_data = mysqli_query($conn,$patient_list);

            while ($row = mysqli_fetch_assoc($fetch_data)) 
            {
                $timestamp = strtotime($row['patient_app-date']);
                $calendarDate = date('F j, Y', $timestamp);
                $p_timestamp = strtotime($row['patient_dob']);
                $p_calendar = date('F j, Y', $p_timestamp);
                $patient_name = $row['patient_name'];
            ?>
                <tr class="list">
                    <th class="user">
                        <img src="../images/patient male img.png" alt="" class="icon">
                        <div class="name-or-userName">
                            <div class="name"><?php echo $row['patient_name']; ?></div><br>
                            <div class="user-name"><?php echo $row['patient_email']; ?></div>
                        </div>
                    </th>

                    <!-- <th class="status">
                        <div class="complete">Accepted</div>
                    </th> -->

                    <th class="date"><?php echo $calendarDate; ?></th>
                    <th class="home address"><?php echo $row['patient_address']; ?></th>
                    <th class="phone"><?php echo $row['patient_contact']; ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- <script>
        window.onload = function () {
            window.print();
        };
    </script> -->

    <div class = "text-center">
        <button onclick="window.print()" class = "btn btn-primary"> PRINT REPORT </button>
    </div>

</body>
</html>
