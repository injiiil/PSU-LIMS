<?php
// Start session
session_start();

// Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    header("Location: ../index.php");
    exit();
}

// Establish database connection (assuming MySQL)
$host = 'localhost'; // Change this to your database host
$user = 'root'; // Change this to your database username
$password = ''; // Change this to your database password
$database = 'psu'; // Change this to your database name

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$session_id = $_SESSION['id'];
$session_id = mysqli_real_escape_string($conn, $session_id);

// Fetch user data from the database
$user_query = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '$session_id'") or die(mysqli_error($conn));

// Check if any rows are returned
if (mysqli_num_rows($user_query) > 0) {
    $user_row = mysqli_fetch_array($user_query);
    $admin_username = $user_row['username'];
} else {
    // Redirect to index.php if user data is not found
    header("Location: ../index.php");
    exit();
}

// Close database connection
mysqli_close($conn);
?>
