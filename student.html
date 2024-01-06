<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .result-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: left;
        }

        #result {
            color: #333;
        }
    </style>
</head>
<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student_comp WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='result-container'>";
            echo "<p>Name: {$row['full_name']}</p>";
            echo "<p>No Matric: {$row['matrik']}</p>";
            // Add other fields you want to display here
            echo "</div>";
        }
    } else {
        echo "<p id='result'>Login failed. Please check your credentials.</p>";
    }

    $conn->close();
    ?>

</body>
</html>
