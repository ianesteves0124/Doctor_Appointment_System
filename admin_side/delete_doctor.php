<?php
include "../database/connection.php";
session_start();

if ($_POST) {

    $id = $_POST['deleteid'];
    $result = $database->query("SELECT * FROM `doctor` WHERE doctor_id = $id");
    $email =($result->fetch_assoc())['doctor_email'];
    $sql = $database->query("DELETE FROM `website_user` WHERE Email = '$email';");
    $sql = $database->query("DELETE FROM `doctor WHERE doctor_email = '$email';");

    if ($result) {

        header("Location: delete_doctor.php?msg=Record has been deleted");
    }
    else {
        
    }
}

?>