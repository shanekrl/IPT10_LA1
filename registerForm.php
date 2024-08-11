<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUF Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 650px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #92e8a3;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="date"], input[type="email"], textarea, select {
            width: 100%;
            padding: 5px;
            margin: 5px 0 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        .buttons {
            text-align: center;
        }
        .buttons input {
            margin: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .buttons input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }
        .buttons input[type="reset"] {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">
        <img src="https://www.auf.edu.ph/images/auf-logo.png" alt="AUF Logo" style="display:block; margin:auto; width:50px;">
        <h2>AUF Student Registration</h2>
        <form action="resultSummary.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">

            <label>Sex:</label>
            <input type="radio" id="male" name="sex" value="Male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="sex" value="Female" required>
            <label for="female">Female</label>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address"></textarea>

            <label for="department">College Department:</label>
            <select id="department" name="department">
                <option value="Computer Studies">Computer Studies</option>
                <option value="Engineering">Engineering</option>
                <option value="Business">Business</option>
                <option value="Arts and Sciences">Arts and Sciences</option>
                <option value="Education">Education</option>
                <option value="Nursing">Nursing</option>
            </select>

            <label for="program">Program:</label>
            <input type="text" id="program" name="program">

            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile">

            <div class="buttons">
                <input type="reset" value="Reset">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>
</html>

