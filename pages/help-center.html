<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "allstar";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['start_chat'])) {
    $admin_id = $_POST['admin_id'];
    $customer_id = $_POST['customer_id'];

    // Check if admin ID exists
    $admin_query = "SELECT * FROM admin WHERE A_ID = '$admin_id'";
    $admin_result = mysqli_query($conn, $admin_query);

    // Check if customer ID exists
    $customer_query = "SELECT * FROM customer WHERE C_ID = '$customer_id'";
    $customer_result = mysqli_query($conn, $customer_query);

    if (mysqli_num_rows($admin_result) > 0 && mysqli_num_rows($customer_result) > 0) {
        // Both IDs are valid, proceed to insert into the database
        $sql = "INSERT INTO helpcenter (A_ID, C_ID) VALUES ('$admin_id', '$customer_id')";

        if (mysqli_query($conn, $sql)) {
            echo "Chat started successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        // Display error message if either admin ID or customer ID is invalid
        echo "Invalid admin ID or customer ID.";
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Center</title>
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

        .form-group input[type="text"] {
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Help Center</h2>
        <p>Enter your admin ID and customer ID in order to open up a chat.</p>
        <form method="post" action="help-center.php">
            <div class="form-group">
                <label for="admin_id">Admin ID:</label>
                <input type="text" id="admin_id" name="admin_id" required>
            </div>
            <div class="form-group">
                <label for="customer_id">Customer ID:</label>
                <input type="text" id="customer_id" name="customer_id" required>
            </div>
            <div class="form-group">
                <button type="submit" name="start_chat">Start Chat</button>
            </div>
        </form>
    </div>
</body>
</html>
