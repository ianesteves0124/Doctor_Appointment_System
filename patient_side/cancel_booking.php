<?php
    // Check if the booking ID is provided in the query string
    if(isset($_GET['id'])) {
        // Retrieve the booking ID from the query string
        $bookingId = $_GET['id'];

        // Perform the cancellation action using the booking ID
        // Update the booking status in the database to indicate cancellation
        
        // Establish a database connection
        include '../database/connection.php';

        // Update the booking status to indicate cancellation
        $cancelQuery = "DELETE FROM booking WHERE appointment_id = $bookingId";
        $cancelResult = mysqli_query($conn, $cancelQuery);

        // Check if the cancellation was successful
        if ($cancelResult) {
            // Display a success message or perform any additional actions after cancellation
            echo "<script> alert('Book Cancelled Successfully'); location.replace('book_page.php') </script>";
        } else {
            // Display an error message if cancellation failed
            echo "Failed to cancel booking.";
        }
        
        // Close the database connection
        mysqli_close($conn);
    } else {
        // Handle the case where the booking ID is not provided
        echo "Invalid booking ID.";
    }
?>
