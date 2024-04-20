<?php
include('session.php');
$oras = strtotime("now");
$ora = date("Y-m-d", $oras);
$conn = mysqli_connect("localhost", "root", "", "psu");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "UPDATE user_log SET logout_Date = ? WHERE custodian_id = ?";
$stmt = mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt, "si", $ora, $session_id);
$result = mysqli_stmt_execute($stmt);

if (!$result) {
    die("Update query failed: " . mysqli_error($conn));
}

session_destroy();
header('location:../index.php');
?>
