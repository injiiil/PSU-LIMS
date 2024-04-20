<?php
 include('../adminPSU/lib/dbcon.php'); 
dbcon();
include('session.php');

$new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
$session_id = mysqli_real_escape_string($conn, $session_id);

$sql = "UPDATE custodian SET password = '$new_password' WHERE custodian_id = '$session_id'";
if (mysqli_query($conn, $sql)) {
    echo "Password updated successfully";
} else {
    echo "Error updating password: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
