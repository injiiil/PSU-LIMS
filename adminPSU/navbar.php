<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">

            <div class="navbar-header">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand" href="#">Admin Panel</a>
            </div>
            <!-- .nav-collapse -->
                        <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "psu");
                    if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    }
                    $query = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '$session_id'") or die(mysqli_error($conn));
                    $row = mysqli_fetch_array($query);
                    ?>
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <img id="avatar1" class="img-responsive" src="<?php echo $row['admin_pic']; ?>">
                            &nbsp;<?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="change_password_admin.php"><i class="icon-cog"></i> Change Password</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#myModal3" data-toggle="modal"><i class="icon-picture"></i> Change Picture</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="logout.php"><i class="icon-signout"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
</div>
<?php include('admin_change_picture.php'); ?>
