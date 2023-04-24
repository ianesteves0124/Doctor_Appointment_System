<?php
include('../database/connection.php');

session_start();

if(isset($_POST['appointment']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['doc_id']);
    $name = validate($_POST['patient_name']);
    $p_age = validate($_POST['patient_age']);
    $gender = validate($_POST['patient_gender']);
    $dob = validate(date('Y-m-d',strtotime($_POST['patient_dob'])));
    $address = validate($_POST['patient_address']);
    $email = validate($_POST['patient_email']);
    $contact = validate($_POST['patient_contact']);
    $appt_date = validate(date('Y-m-d',strtotime($_POST['appointment-date'])));


    $sqladd = "INSERT INTO booking`(doc_id`, patient_name, patient_age, patient_gender, patient_dob, patient_address, patient_email, patient_contact, patient_app-date)
     VALUES ('$id','$name','$p_age','$gender','$dob','$address','$email','$contact','$appt_date')";
    $query = mysqli_query($conn,$sqladd);
   

    if ($query) {
        header("Location: book_page.php?msg=Booked successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>