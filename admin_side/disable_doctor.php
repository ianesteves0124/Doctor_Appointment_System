<?php
include "../database/connection.php";

// disable_doctor.php

if (isset($_GET['id'])) {

    // Prepare and execute the query to update the doctor's account status
    $query = "UPDATE `docto`r SET is_disabled = 1 WHERE `doctor_id` = '".$_GET['id']."'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Redirect back to the page displaying the list of doctors
        header("Location: admin_doctor.php");
        exit();
    } else {
        echo "Error updating doctor's account: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

?>