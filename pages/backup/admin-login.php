<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allstar";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sign up form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $admin_pw = $_POST['admin_pw'];
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_position = $_POST['admin_position'];

    $sql = "INSERT INTO admin (A_PW, A_name, A_email, A_position) VALUES ('$admin_pw', '$admin_name', '$admin_email', '$admin_position')";

    if (mysqli_query($conn, $sql)) {
        echo "Admin successfully registered!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $admin_email = $_POST['admin_email'];
    $admin_pw = $_POST['admin_pw'];

    $sql = "SELECT * FROM admin WHERE A_email='$admin_email' AND A_PW='$admin_pw'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: ../pages/help-center.php");
        exit;
    } else {
        $error = "Invalid email or password.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f5;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4a90e2;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Sign Up</h2>
        <?php if(isset($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="admin_name">Name:</label>
                <input type="text" id="admin_name" name="admin_name" required>
            </div>
            <div class="form-group">
                <label for="admin_email">Email:</label>
                <input type="email" id="admin_email" name="admin_email" required>
            </div>
            <div class="form-group">
                <label for="admin_pw">Password:</label>
                <input type="password" id="admin_pw" name="admin_pw" required>
            </div>
            <div class="form-group">
                <label for="admin_position">Position:</label>
                <input type="text" id="admin_position" name="admin_position" required>
            </div>
            <div class="form-group">
                <button type="submit" name="signup">Sign Up</button>
            </div>
        </form>

        <h2>Admin Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="admin_email_login">Email:</label>
                <input type="email" id="admin_email_login" name="admin_email" required>
            </div>
            <div class="form-group">
                <label for="admin_pw_login">Password:</label>
                <input type="password" id="admin_pw_login" name="admin_pw" required>
            </div>
            <div class="form-group">
                <button type="submit" name="login">Login</button>
            </div>
        </form>
    </div>
</body>
</html>

