<?php
include('./lib/dbcon.php');
dbcon();
include('session.php');

$new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
$session_id = mysqli_real_escape_string($conn, $session_id);

$sql = "UPDATE admin SET password = '$new_password' WHERE admin_id = '$session_id'";
if (mysqli_query($conn, $sql)) {
    echo "Password updated successfully";
} else {
    echo "Error updating password: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
