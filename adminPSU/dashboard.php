<?php
include('header.php');
include('session.php');
?>
<body>
    <?php include('navbar.php') ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('dashboard_slidebar.php'); ?>        
            <div class="span9" id="content">
                <div class="row-fluid">
                    <?php 
                    $query= mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '$session_id'")or die(mysqli_error($conn));
                    $row = mysqli_fetch_array($query);            
                    ?>
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <img id="avatar1" class="img-responsive" src="<?php echo $row['admin_pic']; ?>">
                            <strong> Welcome!</strong> <?php echo $user_row['fname']." ".$user_row['lname'];  ?>
                        </div>
                    </div>

                     <!-- block -->
                    <div id="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
                            <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <div class="block-content collapse in">
                                    <div id="page-wrapper">
                                        <div class="block-content collapse in">
                                            <div id="page-wrapper">
                                                <?php
                                                $conn = mysqli_connect("localhost", "root", "", "psu");
                                                if (!$conn) {
                                                    die("Connection failed: " . mysqli_connect_error());
                                                }
                                              $custodian_query = mysqli_query($conn, "SELECT * FROM custodian") or die(mysqli_error($conn));
                                                $custodian_count = mysqli_num_rows($custodian_query);
                                                mysqli_close($conn);
                                                ?>
                                                <div class="row-fluid">
                                                    <div class="span6">
                                                        <div class="panel panel-yellow">
                                                            <div class="panel-heading">
                                                                <div class="container-fluid">
                                                                    <div class="row-fluid">
                                                                        <div class="span3"><br/> <i class="icon-user fa-5x"></i><br/> </div>
                                                                        <div class="span8 text-right"><br/> <div class="huge"><?php echo $custodian_count; ?></div> <div>CUSTODIAN</div><br/> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="custodian.php">
                                                                <div class="modal-footer">
                                                                    <span class="pull-left">View Details</span>
                                                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $conn = mysqli_connect("localhost", "root", "", "psu");
                                                    if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }
                                                    $teacher_query = mysqli_query($conn, "SELECT * FROM teacher") or die(mysqli_error($conn));
                                                    $teacher_count = mysqli_num_rows($teacher_query);
                                                    mysqli_close($conn);
                                                    ?>
                                                    <div class="span6">
                                                        <div class="panel panel-yellow">
                                                            <div class="panel-heading">
                                                                <div class="container-fluid">
                                                                    <div class="row-fluid">
                                                                        <div class="span3"><br/> <i class="icon-user fa-5x"></i><br/> </div>
                                                                        <div class="span8 text-right"><br/> <div class="huge"><?php echo $teacher_count; ?></div> <div>TEACHER</div><br/> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="teacher.php">
                                                                <div class="modal-footer">
                                                                    <span class="pull-left">View Details</span>
                                                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $conn = mysqli_connect("localhost", "root", "", "psu");
                                                    if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }
                                                    $all_desktop_computer_query = mysqli_query($conn, "SELECT * FROM all_dc") or die(mysqli_error($conn));
                                                    $all_desktop_computer_count = mysqli_num_rows($all_desktop_computer_query);
                                                    mysqli_close($conn);
                                                    ?>
                                                    <div class="row-fluid">
                                                        <div class="span6">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading">
                                                                    <div class="container-fluid">
                                                                        <div class="row-fluid">
                                                                            <div class="span3"><br/> <i class="fa fa-desktop fa-5x"></i><br/> </div>
                                                                            <div class="span8 text-right"><br/> <div class="huge"><?php echo $all_desktop_computer_count ; ?></div> <div>All Desktop Computer</div><br/> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="device.php">
                                                                    <div class="modal-footer">
                                                                        <span class="pull-left">View Details</span>
                                                                        <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $conn = mysqli_connect("localhost", "root", "", "psu");
                                                        if (!$conn) {
                                                            die("Connection failed: " . mysqli_connect_error());
                                                        }
                                                        $room_query = mysqli_query($conn, "SELECT * FROM room") or die(mysqli_error($conn));
                                                        $room_count = mysqli_num_rows($room_query);
                                                        mysqli_close($conn);
                                                        ?>
                                                        <div class="span6">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading">
                                                                    <div class="container-fluid">
                                                                        <div class="row-fluid">
                                                                            <div class="span3"><br/> <i class="fa fa-sitemap fa-5x"></i><br/> </div>
                                                                            <div class="span8 text-right"><br/> <div class="huge"><?php echo $room_count; ?></div> <div>LABORATORIES</div><br/> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="location.php">
                                                                    <div class="modal-footer">
                                                                        <span class="pull-left">View Details</span>
                                                                        <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $conn = mysqli_connect("localhost", "root", "", "psu");
                                                        if (!$conn) {
                                                            die("Connection failed: " . mysqli_connect_error());
                                                        }
                                                        $damage_query = mysqli_query($conn, "SELECT dc_id, dc_brand, dc_serialno, dc_description, propertyno, date_acquired, dc_status FROM all_dc WHERE dc_status = 'damage'") or die(mysqli_error($conn));
                                                        $damage_count = mysqli_num_rows($damage_query);
                                                        mysqli_close($conn);
                                                        ?>
                                                        <div class="row-fluid">
                                                            <div class="span6">
                                                                <div class="panel panel-red">
                                                                    <div class="panel-heading">
                                                                        <div class="container-fluid">
                                                                            <div class="row-fluid">
                                                                                <div class="span3"><br/> <i class="fa fa-times-circle fa-5x"></i><br/> </div>
                                                                                <div class="span8 text-right"><br/> <div class="huge"><?php echo $damage_count;?></div> <div>Damage Device</div><br/> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="damage.php">
                                                                        <div class="modal-footer">
                                                                            <span class="pull-left">View Details</span>
                                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <?php
                                                            $conn = mysqli_connect("localhost", "root", "", "psu");
                                                            if (!$conn) {
                                                                die("Connection failed: " . mysqli_connect_error());
                                                            }
                                                            $good_query = mysqli_query($conn, "SELECT dc_id, dc_brand, dc_serialno, dc_description, propertyno, date_acquired, dc_status FROM all_dc WHERE dc_status = 'good'") or die(mysqli_error($conn));
                                                            $good_count = mysqli_num_rows($good_query);
                                                            mysqli_close($conn);
                                                            ?>
                                                            <div class="span6">
                                                                <div class="panel panel-green">
                                                                    <div class="panel-heading">
                                                                        <div class="container-fluid">
                                                                            <div class="row-fluid">
                                                                                <div class="span3"><br/> ... <i class="fa fa-check-circle fa-5x"></i><br/> </div>
                                                                                <div class="span8 text-right"><br/> <div class="huge"><?php echo $good_count;?></div> <div>Good Condition Device</div><br/> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="good.php">
                                                                        <div class="modal-footer">
                                                                            <span class="pull-left">View Details</span>
                                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <!-- /block -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include('footer.php'); ?>
                    </div>
                    <?php include('script.php'); ?>
                </body>
                <embed src="../sound/wlcome.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />