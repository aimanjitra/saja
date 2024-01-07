<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect("localhost", "root", "", "login_system");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$errorMsg = ''; // Variable to store error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = mysqli_real_escape_string($conn, $_POST['username']);
    $inputPassword = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM student_comp WHERE username='$inputUsername' AND password='$inputPassword'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Redirect to saja.php with username and password as parameters
            header("Location: http://localhost/student.php?username=$inputUsername&password=$inputPassword");
            exit();
        } else {
            $errorMsg = "Incorrect username or password";
        }
    } else {
        $errorMsg = "Error executing query: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

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

        .container-login {
            display: flex;
            flex-direction: column;
            width: 450px;
            padding: 15px;
            border: 1px solid skyblue;
            border-radius: 5px;
            margin: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            z-index: 1;
        }

        .input-group {
            display: flex;
            justify-content: space-between;
        }

        input {
            flex: 1;
            margin: 10px 0;
            height: 35px;
            padding: 7px;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button {
            height: 45px;
            width: 100%;
            background-color: skyblue;
            border: none;
            border-radius: 5px;
            color: #333;
            cursor: pointer;
        }

        button:hover {
            background-color: #333;
            color: skyblue;
        }
    </style>
</head>

<body>
    <div class="container-login">
        <form method="post" action="http://localhost/try.php">
            <div id="statusLabel">Student</div>
            <?php
            if (!empty($errorMsg)) {
                echo '<div class="error-message">' . $errorMsg . '</div>';
            }
            ?>
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Log In</button>
        </form>
    </div>
</body>

</html>
