<?php
include "../database/connection.php";

session_start();

$query = "SELECT * FROM `doctor` WHERE `doctor_id` = '".$_GET['id']."'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) 
{
    $name=$row['doctor_name'];
    $email=$row['doctor_email'];
    $Description=$row['description'];
    $Contact=$row['contact'];
    $address=$row['clinic_address'];
    $password=$row['doctor_password'];
    $specialty =$row['specialty'];
}

$id = $_GET['id'];

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

    $sql1= "UPDATE `doctor` SET `doctor_name`='$name',`doctor_email`='$email',`doctor_password`='$password',
    `description`='$Description',`contact`='$Contact',`clinic_address`='$address',`specialty`='$specialty' WHERE doctor_id = '".$_GET['id']."'";

    $result = mysqli_query($conn,$sql1);

    if ($result) {
        echo "<script> alert('Updated Successfully!'); location.replace('admin_doctor.php') </script>";
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
    <form style = "font-family: monospace;" method="POST" action = "">
            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Name:</label>
                <div class = "col-sm-6">
                    <input type="text" class = "form-control" name="doctor_name" value="<?php echo $name?>"required>
                </div>
            </div>
            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Email:</label>
                <div class = "col-sm-6">
                    <input type="email" class = "form-control" name="doctor_email" value="<?php echo $email?>"required>
                </div>
            </div>
            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Description:</label>
                <div class = "col-sm-6">
                    <input type="text" class = "form-control" name="description" value="<?php echo $Description?>"required>
                </div>
            </div>
            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Contact:</label>
                <div class = "col-sm-6">
                    <input type="text" class = "form-control" name="contact" value="<?php echo $Contact?>"required>
                </div>
            </div>

            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Specialty:</label>
                <div class = "col-sm-6">
                <select name="specialty" id="" class = "form-control">
                    <option> <?php echo $specialty?></option>
                <?php
                        $sql_list = "SELECT * FROM `Doctor_Specialty` ORDER BY `Specialty_Title` asc;";
                        $result = mysqli_query($conn,$sql_list);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    
                                    <option><?php echo $row['Specialty_Title']?></option>
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
                    <input type="text" class = "form-control" name="clinic_address" value="<?php echo $address?>"required>
                </div>
            </div>

            <div class = "row mb-3">
                <label class = "col-sm-3 col-form-label">Change Password:</label>
                <div class = "col-sm-6">
                    <input type="text" class = "form-control" name="doctor_password"  value="<?php echo $password?>"required>
                </div>
            </div>

            <div class = "row mb-3">
                <div class = "offset-sm-3 col-sm-3 d-grid">
                    <button type = "submit" class = "btn btn-outline-primary">Save</button>
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