<?php
include "../database/connection.php";
if (isset($_GET['id'])) {
    $doctorId = $_GET['id'];
    
    // Prepare and execute the query to update the doctor's account status
    $query = "UPDATE doctor SET is_disabled = 0 WHERE doctor_id = $doctorId";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Redirect back to the page displaying the list of doctors
        echo "<script> alert('Enabling Account Successfully!'); location.replace('admin_doctor.php') </script>";
        exit();
    } else {
        echo "Error updating doctor's account: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
