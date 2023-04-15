<?php
include "../database/connection.php";

session_start();

if($_POST)
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name= validate($_POST['doctor_name']);
    $email= validate($_POST['doctor_email']);
    $Description= validate($_POST['description']);
    $Contact= validate($_POST['contact']);
    $address= validate($_POST['clinic_address']);
    $password= validate($_POST['doctor_password']);
    $specialty = validate($_POST['specialty']);

    $sql1= "INSERT INTO `doctor`(`doctor_name`, `doctor_email`, `doctor_password`, `description`, `contact`, `clinic_address`, `specialty`)
     VALUES ('$name','$email','$password','$Description','$Contact','$address','$specialty')";
    $sql2= "INSERT INTO `website_user`(`Email`, `usertype`) 
    VALUES ('$email','d')";

    $result = mysqli_query($conn,$sql1);
    $result = mysqli_query($conn,$sql2);

    if ($result) {
        header("Location: add_doctor.php?msg=Doctor added successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>New Doctor</title>
</head>
<body>
<div class = "container my-5">
    <div class = "text-center mb-4">
    <h2 style = "font-family: monospace;">Update Doctor Information</h2>
    <p style = "font-family: monospace;" class = "text-muted">Click save after updating any information.</p>
    </div>

    <div class = "">
    <form style = "font-family: monospace;" method="post" >
            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Name:</label>
                <div class = "col-sm-6">
                    <input type="text" class = "form-control" name="doctor_name" value=""required>
                </div>
            </div>
            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Email:</label>
                <div class = "col-sm-6">
                    <input type="email" class = "form-control" name="doctor_email" value=""required>
                </div>
            </div>
            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Description:</label>
                <div class = "col-sm-6">
                    <input type="text" class = "form-control" name="description" value=""required>
                </div>
            </div>
            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Contact:</label>
                <div class = "col-sm-6">
                    <input type="text" class = "form-control" name="contact" value=""required>
                </div>
            </div>
            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Specialty:</label>
                <div class = "col-sm-6">
                <select name="specialty" id="" class = "form-control">
                    <option>Select Specialty</option>
                <?php
                        $sql_list = "SELECT * FROM `Doctor_Specialty` ORDER BY `Specialty_Title` asc;";
                        $result = mysqli_query($conn,$sql_list);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    
                                    <option> <?php echo $row['Specialty_Title']?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Clinic Address:</label>
                <div class = "col-sm-6">
                    <input type="text" class = "form-control" name="clinic_address" value=""required>
                </div>
            </div>
            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Password:</label>
                <div class = "col-sm-6">
                    <input type="password" class = "form-control" name="doctor_password"  value=""required>
                </div>
            </div>

            <div class = "row mb-3">
                <div class = "offset-sm-3 col-sm-3 d-grid">
                    <button type = "submit" class = "btn btn-outline-primary">Create</button>
                </div>
                <div class = "col-sm-3 d-grid">
                    <a class = "btn btn-outline-primary" href="admin_doctor.php" role = "button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>