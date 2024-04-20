<?php
session_start();

if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    header("Location: ../index.php");
    exit();
}


$host = 'localhost';
$user = 'root'; 
$password = ''; 
$database = 'psu'; 

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
}

$session_id = $_SESSION['id'];
$session_id = mysqli_real_escape_string($conn, $session_id);

$custodian_query = mysqli_query($conn, "SELECT * FROM custodian WHERE custodian_id = '$session_id'") or die(mysqli_error($conn));
$custodian_row = mysqli_fetch_array($custodian_query);
$custodian_username = $custodian_row['username'];
mysqli_close($conn);
?>
