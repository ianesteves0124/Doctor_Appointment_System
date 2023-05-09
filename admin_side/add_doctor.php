<?php
include "../database/connection.php";

session_start();

if(isset($_POST['add']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['doctor_name']);
    $email = validate($_POST['doctor_email']);
    $Description = validate($_POST['description']);
    $Contact = validate($_POST['contact']);
    $address = validate($_POST['clinic_address']);
    $password = validate($_POST['doctor_password']);
    $specialty = validate($_POST['specialty']);
    $specialty2 = validate($_POST['specialty2']);
    $specialty3 = validate($_POST['specialty3']);

    $sql1= "INSERT INTO `doctor`(`doctor_name`, `doctor_email`, `doctor_password`, `description`, `contact`, `clinic_address`, `specialty`, `specialty2`, `specialty3`)
     VALUES ('$name','$email','$password','$Description','$Contact','$address','$specialty', '$specialty2', '$specialty3')";
    $sql2= "INSERT INTO `website_user`(`Email`, `usertype`) 
    VALUES ('$email','d')";

    $result = mysqli_query($conn,$sql1);
    $result = mysqli_query($conn,$sql2);

    if ($result) {
        header("Location: admin_doctor.php?msg=Doctor added successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>