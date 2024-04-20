<?php
        include('adminPSU/lib/dbcon.php');
		$conn = dbcon();
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		/*................................................ adminPSU .....................................................*/
		$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $query);
		if (!$result) {
			die("Query failed: " . mysqli_error($conn));
		}
		$row = mysqli_fetch_array($result);
		$num_row = mysqli_num_rows($result);
		/*...................................................custodianPSU ..............................................*/
		$query_custodian = mysqli_query($conn, "SELECT * FROM custodian WHERE username='$username' AND password='$password'");
        if (!$query_custodian) {
            die("Query failed: " . mysqli_error($conn));
        }
        $num_row_custodian = mysqli_num_rows($query_custodian);
        $row_custodian = mysqli_fetch_array($query_custodian);
		/*...................................................teacherPSU ..............................................*/
		$query_teacher = mysqli_query($conn, "SELECT * FROM teacher WHERE username='$username' AND password='$password'");
        if (!$query_teacher) {
            die("Query failed: " . mysqli_error($conn));
        }
        $num_row_teacher = mysqli_num_rows($query_teacher);
        $row_teacher = mysqli_fetch_array($query_teacher);

	

if ($num_row > 0) {
    $_SESSION['id'] = $row['admin_id'];
    echo 'true_admin';
    mysqli_query($conn, "INSERT INTO user_log (username, login_date, admin_id) VALUES ('$username', NOW(), " . $row['admin_id'] . ")");

} else if ($num_row_custodian > 0) {
    $_SESSION['custodian'] = $row_custodian['custodian_id'];
    echo 'true_custodian';
    mysqli_query($conn, "INSERT INTO user_log (username, login_date, custodian_id) VALUES ('$username', NOW(), " . $row_custodian['custodian_id'] . ")");
	
} else if ($num_row_teacher > 0) {
    $_SESSION['teacher'] = $row_teacher['teacher_id'];
    echo 'true_teacher';
    mysqli_query($conn, "INSERT INTO user_log (username, login_date, teacher_id) VALUES ('$username', NOW(), " . $row_teacher['teacher_id'] . ")");
	
} else {
    echo 'false';
}

mysqli_close($conn);
?>