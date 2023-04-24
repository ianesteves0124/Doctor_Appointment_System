<?php
include('admin_index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_side_css/admin_dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dashboard</title>
</head>
<body>

        <center>
                    <table class="filter-container doctor-header" style="border: none;width:78%; margin-left:255px; border-radius:10px;" border="0" >
                    <tr>
                        <td >
                            <h3 style="margin-top:40px; margin-left:40px; font-size:20px; font-weight:700; cursor: default;">Welcome!</h3>
                            <!-- <h1><?php echo $username  ?>.</h1> -->
                            <h1 style="margin-top:20px; margin-left:35px; font-weight:700; cursor: default;">Administrator.</h1>
                            <p style="margin-top:40px; margin-left:35px; font-weight:450; font-style:italic; font-size:18px; cursor: default;">"An administrator in a bureaucratic world is a man who can feel big by merging his non-entity in an abstraction.<br>
                              A real person in touch with real things inspires terror in him". ~ Marshall McLuhan<br><br>
                            </p>
                            <!-- <a href="appointment.php" class="non-style-link"><button class="btn-primary btn" style="width:30%">View My Appointments</button></a> -->
                            <br>
                            <br>
                        </td>
                    </tr>
                    </table>
        </center>

    <center>
                        <table class="filter-container" style="border: none; width:65%; margin-top:20px; margin-left:50px; cursor:default;" border="0">
                            <tr>
                                <td colspan="4">
                                    <p style="font-size: 24px;font-weight:700;padding-left: 12px; margin-top:-10px;">Status</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%;">
                                    <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex">
                                        <div>
                                                <div class="h1-dashboard">
                                                    <!-- <?php    echo $doctorrow->num_rows  ?> -->
                                                    2
                                                </div><br>
                                                <div class="h3-dashboard">
                                                    Doctors &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                        </div>
                                                <div class="btn-icon-back dashboard-icons" style="background-image: url('/images/doctors-hover.svg');"></div>
                                    </div>
                                </td>
                                <td style="width: 25%;">
                                    <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex;">
                                        <div>
                                                <div class="h1-dashboard">
                                                    <!-- <?php    echo $patientrow->num_rows  ?> -->
                                                    3
                                                </div><br>
                                                <div class="h3-dashboard">
                                                    Patients &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                        </div>
                                                <div class="btn-icon-back dashboard-icons" style="background-image: url('/images/patients-hover.svg');"></div>
                                    </div>
                                </td>
                                <td style="width: 25%;">
                                    <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex; ">
                                        <div>
                                                <div class="h1-dashboard" >
                                                    <!-- <?php    echo $appointmentrow ->num_rows  ?> -->
                                                    1
                                                </div><br>
                                                <div class="h3-dashboard">
                                                    Overall Booking &nbsp;&nbsp;
                                                </div>
                                        </div>
                                                <div class="btn-icon-back dashboard-icons" style="margin-left: 0px;background-image: url('/images/book-hover.svg');"></div>
                                    </div>
                                </td>
                                <td style="width: 25%;">
                                    <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex;padding-top:26px;padding-bottom:26px;">
                                        <div>
                                                <div class="h1-dashboard">
                                                    <!-- <?php    echo $schedulerow ->num_rows  ?> -->
                                                    1
                                                </div><br>
                                                <div class="h3-dashboard" style="font-size: 15px">
                                                    Today Sessions
                                                </div>
                                        </div>
                                                <div class="btn-icon-back dashboard-icons" style="background-image: url('/images/session-iceblue.svg');"></div>
                                    </div>
                                </td>
                                
                            </tr>
                        </table>
    </center>
</body>
</html>