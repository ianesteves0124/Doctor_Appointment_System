<?php
include '../database/connection.php';

// Check if the booking ID is provided in the query string
if (isset($_GET['id'])) {
    // Retrieve the booking ID from the query string
    $bookingId = $_GET['id'];

    $sql = "SELECT * FROM booking WHERE appointment_id = '$bookingId'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Fetch the data for the first row
        $row = $result->fetch_assoc();

        // Assign the fetched data to variables
        $patientName = $row['patient_name'];
        $patientAge = $row['patient_age'];
        $patientGender = $row['patient_gender'];
        $patientDOB = $row['patient_dob'];
        $patientAddress = $row['patient_address'];
        $patientEmail = $row['patient_email'];
        $patientContact = $row['patient_contact'];
        $appointmentDate = $row['patient_app-date'];
    } else {
        // Handle the case where no rows were returned
        echo "No patient information found for the given booking ID.";
        exit;
    }
} else {
    // Handle the case where the booking ID is not provided
    echo "Invalid booking ID.";
    exit;
}

if (isset($_POST['update'])) {
    // Retrieve the updated values from the form submission
    $updatedPatientName = $_POST['patient_name'];
    $updatedPatientAge = $_POST['patient_age'];
    $updatedPatientGender = $_POST['patient_gender'];
    $updatedPatientDOB = $_POST['patient_dob'];
    $updatedPatientAddress = $_POST['patient_address'];
    $updatedPatientEmail = $_POST['patient_email'];
    $updatedPatientContact = $_POST['patient_contact'];
    $updatedAppointmentDate = $_POST['appointment-date'];

    // Update the booking information in the database
    $updateSql = "UPDATE booking SET
        `patient_name` = '$updatedPatientName',
        `patient_age` = '$updatedPatientAge',
        `patient_gender` = '$updatedPatientGender',
        `patient_dob` = '$updatedPatientDOB',
        `patient_address` = '$updatedPatientAddress',
        `patient_email` = '$updatedPatientEmail',
        `patient_contact` = '$updatedPatientContact',
        `patient_app-date` = '$updatedAppointmentDate'
        WHERE appointment_id = '$bookingId'";

    // Execute the update query
    if ($conn->query($updateSql) === TRUE) {
        // Booking information updated successfully
        echo "<script> alert('Booking updated successfully!'); location.replace('book_page.php') </script>";
        // Redirect to a success page or perform any other desired actions
        exit;
    } else {
        // Error occurred while updating the booking information
        echo "Error updating booking information: " . $error;
        // Redirect to an error page or perform any other desired actions
        exit;
    }
}
// Close the database connection
$conn->close();
?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="image/png" href="..images/website icon.png">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
            <title>Edit Booking Application</title>
        </head>
        <body>
            <div class = "container my-5">
                <div class = "text-center mb-4">
                    <h2 style = "font-family: Arial, Helvetica, sans-serif;">Edit Booking Application</h2>
                </div>
                <div class = "content">
                    <form style = "font-family: Arial, Helvetica, sans-serif;" method="POST" action = "">
                        <div class = "row mb-3">
                            <label class = "col-sm-3 col-form-label">Patient Name:</label>
                            <div class = "col-sm-6">
                                <input type="text" class = "form-control" name="patient_name" value="<?php echo $patientName; ?>"required>
                            </div>
                        </div>

                        <div class = "row mb-3">
                            <label class = "col-sm-3 col-form-label">Age:</label>
                            <div class = "col-sm-6">
                                <input type="text" class = "form-control" pattern="[0-9]+" name="patient_age" value="<?php echo $patientAge; ?>"required>
                            </div>
                        </div>

                        <div class = "row mb-3">
                            <label class = "col-sm-3 col-form-label">Gender:</label>
                            <div class = "col-sm-9">
                            <select class="col-sm-7" name="patient_gender">
                                <?php if ($patientGender !== 'male'): ?>
                                    <option value="male">Female</option>
                                    <option value="male">Male</option>
                                <?php endif; ?>
                                <?php if ($patientGender !== 'female'): ?>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                <?php endif; ?>
                            </select>
                            </div>
                        </div>

                        <div class = "row mb-3">
                            <label class = "col-sm-3 col-form-label">Date of Birth:</label>
                            <div class = "col-sm-6">
                                <input type="date" class = "form-control" name="patient_dob" value="<?php echo $patientDOB; ?>"required>
                            </div>
                        </div>

                        <div class = "row mb-3">
                            <label class = "col-sm-3 col-form-label">Address:</label>
                            <div class = "col-sm-6">
                                <input type="text" class = "form-control" name="patient_address" value="<?php echo $patientAddress; ?>"required>
                            </div>
                        </div>

                        <div class = "row mb-3">
                            <label class = "col-sm-3 col-form-label">Email:</label>
                            <div class = "col-sm-6">
                                <input type="text" class = "form-control" name="patient_email" value="<?php echo $patientEmail; ?>"required>
                            </div>
                        </div>

                        <div class = "row mb-3">
                            <label class = "col-sm-3 col-form-label">Contact:</label>
                            <div class = "col-sm-6">
                                <input type="text" class = "form-control" pattern="[0-9]+" name="patient_contact" value="<?php echo $patientContact; ?>"required>
                            </div>
                        </div>

                        <div class = "row mb-3">
                            <label class = "col-sm-3 col-form-label">Appointment Date:</label>
                            <div class = "col-sm-6">
                                <input type="date" class = "form-control" name="appointment-date" value="<?php echo $appointmentDate; ?>"required>
                            </div>
                        </div>

                        <div class = "row mb-3">
                            <div class = "offset-sm-3 col-sm-3 d-grid">
                                <button type = "submit" name = "update"class = "btn btn-outline-primary">Update</button>
                            </div>
                            <div class = "col-sm-3 d-grid">
                                <a class = "btn btn-outline-primary" href="book_page.php" role = "button">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </body>
        </html>