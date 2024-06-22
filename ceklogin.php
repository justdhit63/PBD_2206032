<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the posted data
$user = $_POST['username'];
$pass = $_POST['password'];

// Check user credentials
$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];

    // Redirect based on role
    if ($row['role'] == 'admin') {
        header("Location: admin_menu.html");
    } else {
        header("Location: user_menu.html");
    }
} else {
    echo "Invalid username or password.";
    header("Location: index.html");
}

$stmt->close();
$conn->close();
?>
