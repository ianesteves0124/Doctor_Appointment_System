<title>Primary Care & General Medicine | Top Specialties| Doctor Appointment System</title>
<?php include('header_nav.php'); ?> <!-- TO CALL TOP NAVIGATIONS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/patient_side_css/ts_about_primarycare.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="about">
    <h1>Top Specialties | About Primary Care & General Medicine</h1>
</div>
    <h1 class = "headertitle">Primary Care & General Medicine</h1>
    <h1 class = "aboutdef">DEFINITION</h1>
    <h2 class = "def1">Primary health care is based on caring for people rather than specific diseases. This means that 
        professionals working in general practice are generalists, dealing with a broad range of physical, psychological and 
        social problems, rather than specialists in a particular disease area.</h2>
    <h2 class = "def2">General medicine, sometimes known as internal medicine, is a field of medicine that focuses on the 
        prevention, diagnosis, and non-surgical treatment of illnesses that are connected to the internal organs.</h2>
</div>
<center>
<div class="titlelist">
<h1>DOCTOR'S LIST</h1></div>
<div class="container">
<!-- Doctor 1 -->
      <div class="box">
      <div class="image">
         ---<img src="../images/doc img.png">-----
        </div>
        <div class="name_job">Dr. David Chrish</div>
        <h2 class="job">Cardiologist</h2>
        <h3 class="desc">2 years Professional Experience</h3>
        <h3 class="loc">Clinic location: Zambales</h3>
        <p class="available">Monday-Thursday 08:00 A.M. to 05:00 P.M. | Friday 10:00 A.M. to 07:00 P.M.</p>
        

    <!-- popup window -->
<div class ="btns">
<a class="buttonvm" href="#doc1">View More</a>
<a class="buttonvm" href="#bookdoc1">Book Now!</a>
<!-- <button>Book Now!</button> -->

<div id="doc1" class="overlay">
	<div class="popup">
    <center>
		<h1>Dr. David Chrish</h1>
        <h2>Cardiologist</h2>
		<a class="close" href="#">&times;</a></center>
        <center>
		<div class="content">
            <h3>Professional Experience:</h3>
                <h4>2 years</h4>
            <h3>Clinic Location:</h3>
                <h4>#12 St. New Kababae Olongapo City Zambales, Philippines</h4> 
            <h3>Availability:</h3>
                <h4>Monday - Thursday 08:00 A.M. to 05:00 P.M. | Friday 10:00 A.M. to 07:00 P.M.</h4>
    </div>
    </center>
	</div>
</div>

<div id="bookdoc1" class="overlay">
	<div class="popup">
    <center>
		<h1>APPOINTMENT FORM</h1>
        <h2>Fill up all the field to proceed from booking</h2>
		<a class="close" href="#">&times;</a></center>
        <center>
		<div class="content">
            <br>
            <h2>DOCTOR INFORMATION:</h2>
            <h3>Doctor:</h3>
                <h4>Dr. David Chrish, Cardiologist</h4>
            <h3>Email Address:</h3>
                <h4>dchrish@das.com</h4>
            <h3>Contact Number:</h3>
                <h4>0939-123-4567</h4>
            <h3>Clinic Location:</h3>
                <h4>#12 St. New Kababae Olongapo City Zambales, Philippines</h4> 
            <h3>Availability:</h3>
                <h4>Monday - Thursday 08:00 A.M. to 05:00 P.M. | Friday 10:00 A.M. to 07:00 P.M.</h4>
        <form action="/action_page.php">
            <br><br><br><br><br><br>
            <h2>APPOINTMENT INFORMATION:</h2>
            <h3>First Name:</h3>
                    <input type="text" id="fname" name="fname" placeholder="Your name..." required><br><br>
            <h3>Last Name:</h3>
                    <input type="text" id="lname" name="lname" placeholder="Your last name..." required><br><br>
            <h3>City or Municipality:</h3>
                    <input type="text" id="city" name="city" placeholder="ex. Subic" required><br><br>
            <h3>Province:</h3>
                    <input type="text" id="province" name="province" placeholder="ex. Zambales" required><br><br>
            <h3>Contact Number:</h3>
                    <input type="tel" id="phone" name="phone" placeholder="09*********" required><br><br>
            <h3>Email Address:</h3>
                    <input type="email" id="email" name="email" placeholder="patient123@das.com" required><br><br>
            <h3>Appointment Date:</h3>
                    <input type="date" id="bookdate" name="bookdate"  required><br><br><br>
                    <input type="submit"href="#" value="Submit">
</form>
    </div>
    </center>
	</div>
</div>

        </div>
      </div>







      <!-- Doctor 2 -->
      <div class="box">
        <div class="image">
        ---<img src="../images/doc img.png">-----
        </div>
        <div class="name_job">Dr. Kristina Bellis M.D.</div>
        <h2 class="job">Ophthalmologist</h2>
        <h3 class="desc">10 years Professional Experience</h3>
        <h3 class="loc">Clinic location: Bataan</h3>
        <p class="available">Monday 08:00 A.M. to 05:00 P.M. | Tuesday-Saturday 10:00 A.M. to 07:00 P.M.</p>
        
         <!-- popup window -->
<div class ="btns">
<a class="buttonvm" href="#doc2">View More</a>
<button>Book Now!</button>

<div id="doc2" class="overlay">
	<div class="popup">
    <center>
		<h1>Dr. Kristina Bellis M.D.</h1>
        <h2>Ophthalmologist</h2>
		<a class="close" href="#">&times;</a></center>
        <center>
		<div class="content">
            <h3>Professional Experience:</h3>
                <h4>10 years</h4>
            <h3>Clinic Location:</h3>
                <h4>#64 St. New Jersey Bataan, Philippines</h4> 
            <h3>Availability:</h3>
                <h4>Monday 08:00 A.M. to 05:00 P.M. | Tuesday-Saturday 10:00 A.M. to 07:00 P.M.</h4>
    </div>
    </center>
	</div>
</div>
        </div>
      </div>

<!-- Doctor 3 -->
      <div class="box">
        <div class="image">
        ---<img src="../images/doc img.png">-----
        </div>
        <div class="name_job">Dr. Stephen Marlo M.D.</div>
        <h2 class="job">Pediatrician</h2>
        <h3 class="desc">7 years Professional Experience</h3>
        <h3 class="loc">Clinic location: Metro Manila</h3>
        <p class="available">Monday-Wednesday 08:00 A.M. to 05:00 P.M. | Friday 11:00 A.M. to 08:00 P.M.</p>
        
        <!-- popup window -->
<div class ="btns">
<a class="buttonvm" href="#doc3">View More</a>
<button>Book Now!</button>

<div id="doc3" class="overlay">
	<div class="popup">
    <center>
		<h1>Dr. Stephen Marlo M.D.</h1>
        <h2>Pediatrician</h2>
		<a class="close" href="#">&times;</a></center>
        <center>
		<div class="content">
            <h3>Professional Experience:</h3>
                <h4>7 years</h4>
            <h3>Clinic Location:</h3>
                <h4>#16 St. Makati City Metro Manila, Philippines</h4> 
            <h3>Availability:</h3>
                <h4>Monday-Wednesday 08:00 A.M. to 05:00 P.M. | Friday 11:00 A.M. to 08:00 P.M.</h4>
    </div>
    </center>
	</div>
</div>
        </div>
      </div>

<!-- Doctor 4 -->
      <div class="box">
      <div class="image">
      ---<img src="../images/doc img.png">-----
        </div>
        <div class="name_job">Dr. Carla Port Ph.D.</div>
        <h2 class="job">Obstetrician</h2>
        <h3 class="desc">13 years Professional Experience</h3>
        <h3 class="loc">Clinic location: Davao City</h3>
        <p class="available">Monday-Friday 09:00 A.M. to 04:00 P.M.</p>
        
        <!-- popup window -->
<div class ="btns">
<a class="buttonvm" href="#doc4">View More</a>
<button>Book Now!</button>

<div id="doc4" class="overlay">
	<div class="popup">
    <center>
		<h1>Dr. Carla Port Ph.D.</h1>
        <h2>Obstetrician</h2>
		<a class="close" href="#">&times;</a></center>
        <center>
		<div class="content">
            <h3>Professional Experience:</h3>
                <h4>13 years</h4>
            <h3>Clinic Location:</h3>
                <h4>#1 St. Davao City Mindanao, Philippines</h4> 
            <h3>Availability:</h3>
                <h4>Monday-Friday 09:00 A.M. to 04:00 P.M.</h4>
    </div>
    </center>
	</div>
</div>
        </div>
      </div>

<!-- Doctor 5 -->
      <div class="box">
      <div class="image">
      ---<img src="../images/doc img.png">-----
        </div>
        <div class="name_job">Dr. Karl Kentucky</div>
        <h2 class="job">Dermatology</h2>
        <h3 class="desc">3 years Professional Experience</h3>
        <h3 class="loc">Clinic location: Ilocos Norte</h3>
        <p class="available">Monday-Friday 11:00 A.M. to 04:00 P.M.</p>
        
      <!-- popup window -->
<div class ="btns">
<a class="buttonvm" href="#doc5">View More</a>
<button>Book Now!</button>

<div id="doc5" class="overlay">
	<div class="popup">
    <center>
		<h1>Dr. Karl Kentucky</h1>
        <h2>Dermatology</h2>
		<a class="close" href="#">&times;</a></center>
        <center>
		<div class="content">
            <h3>Professional Experience:</h3>
                <h4>3 years</h4>
            <h3>Clinic Location:</h3>
                <h4>#24 St. San Pedro ilocos Norte, Philippines</h4> 
            <h3>Availability:</h3>
                <h4>Monday-Friday 11:00 A.M. to 04:00 P.M.</h4>
    </div>
    </center>
	</div>
</div>
        </div>
      </div>

<!-- Doctor 6 -->
      <div class="box">
      <div class="image">
      ---<img src="../images/doc img.png">-----
        </div>
        <div class="name_job">Dr. Sophia Turner</div>
        <h2 class="job">Ears, Nose and Throat</h2>
        <h3 class="desc">20 years Professional Experience</h3>
        <h3 class="loc">Clinic location: Zambales</h3>
        <p class="available">Monday-Friday 08:00 A.M. to 04:00 P.M.</p>
        
        <!-- popup window -->
<div class ="btns">
<a class="buttonvm" href="#doc6">View More</a>
<button>Book Now!</button>

<div id="doc6" class="overlay">
	<div class="popup">
    <center>
		<h1>Dr. Sophia Turner</h1>
        <h2>Ears, Nose and Throat</h2>
		<a class="close" href="#">&times;</a></center>
        <center>
		<div class="content">
            <h3>Professional Experience:</h3>
                <h4>20 years</h4>
            <h3>Clinic Location:</h3>
                <h4>#23 St. San Marcelino Zambales, Philippines</h4> 
            <h3>Availability:</h3>
                <h4>Monday-Friday 08:00 A.M. to 04:00 P.M.</h4>
    </div>
    </center>
	</div>
</div>


        </div>
      </div>
    </div>
</div>
</center>

</div>
</body>
</html>