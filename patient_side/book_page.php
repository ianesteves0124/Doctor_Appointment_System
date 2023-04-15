
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/patient_side_css/book_page.css">
    <title>Appointment Request | Doctor Appointment System</title>
</head>
<body>
<?php include('header_nav.php'); ?> <!-- TO CALL TOP NAVIGATIONS -->
<div class="appreq">
        <h1>APPOINTMENT REQUEST</h1>
</div>
<center>
        <div class="container">
    <table class="table">
        <thead class="thead">
            <tr class="list">
                <th class="user">Doctor</th>
                <th class="specialty">Specialty</th>
                <th class="status">Status</th>
                <th class="date">Date</th>
                <th class="location">Location</th>
                <th class="phone">Phone</th>
                <th class="contact">Contact</th>
                <th class="action">Action</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr class="list">
                <th class="user">
                    <img src="../images/doc profile img 2.png" alt="" class="icon">
                    <div class="name-or-userName">
                        <div class="name">Dr. David Chrish</div>
                        <div class="user-name">dchrish@das.com</div>
                    </div>
                </th>
                <th class="specialty">Cardiologist</th>
                <th class="status">
                    <div class="active">Completed</div>
                </th>
                <th class="date">April 20, 2023</th>
                <th class="location">Zambales</th>
                <th class="phone">0939-123-4567</th>
                <th class="contact">
                    <div class="button">Contact</div>
                </th>
                <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th>
            </tr>
            <tr class="list">
                <th class="user">
                    <img src="../images/doc profile img 3.png" alt="" class="icon">
                    <div class="name-or-userName">
                        <div class="name">Dr. Kristina Bellis M.D.</div>
                        <div class="user-name">krisbellis@gmail.com</div>
                    </div>
                </th>
                <th class="specialty">Ophthalmologist</th>
                <th class="status">
                    <div class="active">Completed</div>
                </th>
                <th class="date">April 26, 2023</th>
                <th class="location">Bataan</th>
                <th class="phone">0919-133-9754</th>
                <th class="contact">
                    <div class="button">Contact</div>
                </th>
                <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th>
            </tr>
            <tr class="list">
                <th class="user">
                    <img src="../images/doc profile img 2.png" alt="" class="icon">
                    <div class="name-or-userName">
                        <div class="name">Dr. Stephen Marlo M.D.</div>
                        <div class="user-name">stephenmarlo@gmail.com</div>
                    </div>
                </th>
                <th class="specialty">Pediatrician</th>
                <th class="status">
                    <div class="active">Completed</div>
                </th>
                <th class="date">April 27, 2023</th>
                <th class="location">Manila</th>
                <th class="phone">0921-456-9876</th>
                <th class="contact">
                    <div class="button">Contact</div>
                </th>
                <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th>
            </tr>
            <tr class="list">
                <th class="user">
                    <img src="../images/doc profile img 3.png" alt="" class="icon">
                    <div class="name-or-userName">
                        <div class="name">Dr. Carla Port Ph.D.</div>
                        <div class="user-name">carlaport@gmail.com</div>
                    </div>
                </th>
                <th class="specialty">Obstetrician</th>
                <th class="status">
                    <div class="inactive">Pending</div>
                </th>
                
                <th class="date">May 10, 2023</th>
                <th class="location">Davao</th>
                <th class="phone">0931-234-6543</th>
                <th class="contact">
                    <div class="button">Contact</div>
                </th>
                <th class="action">
                    <div class="action-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </th>
            </tr>
        </tbody>
    </table>
</div>
</center>

</body>
</html>