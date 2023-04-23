<?php

session_start();
include '../database/connection.php';

if($_POST)
{

    
    $name = $_POST['patient_name'];
    // $p_age= $_POST['patient_age'];
    // $gender = $_POST['patient_gender'];
    // $dob = validate(date('Y-m-d',strtotime($_POST['patient_dob'])));
    // $Address= validate($_POST['patient_address']);
    // $email= validate($_POST['patient_email']);
    // $Contact = validate($_POST['patient_contact']);
    // $app_date = validate(date('Y-m-d',strtotime($_POST['appointment-date'])));

    $query = "INSERT INTO booking (`patient_name`) VALUES ('$name')";
    $result = mysqli_query($conn,$query);

    if ($result) {
        header("Location: book_page.php?msg=");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>