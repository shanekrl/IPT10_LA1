<?php
// Check if the required fields are set and not empty
if (!isset($_POST['name']) || empty($_POST['name']) || !isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['sex'])) {
    // Redirect back to the registration page if required fields are missing
    header('Location: registerForm.php');
    exit();
}

// Get the form data
$name = $_POST['name'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$address = $_POST['address'];
$department = $_POST['department'];
$program = $_POST['program'];
$mobile = $_POST['mobile'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .name {
            <?php echo $sex == 'Male' ? 'background-color: blue;' : 'background-color: red;'; ?>
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Registration Summary</h2>
        <table>
            <tr>
                <th>Name</th>
                <td class="name"><?php echo htmlspecialchars($name); ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo htmlspecialchars($dob); ?></td>
            </tr>
            <tr>
                <th>Sex</th>
                <td><?php echo htmlspecialchars($sex); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo htmlspecialchars($email); ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo htmlspecialchars($address); ?></td>
            </tr>
            <tr>
                <th>College Department</th>
                <td><?php echo htmlspecialchars($department); ?></td>
            </tr>
            <tr>
                <th>Program</th>
                <td><?php echo htmlspecialchars($program); ?></td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td><?php echo htmlspecialchars($mobile); ?></td>
            </tr>
        </table>
    </div>

</body>
</html>
