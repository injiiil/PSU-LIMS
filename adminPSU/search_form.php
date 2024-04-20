<!-----------------------------------------------Advance Search Form Modal --------------------------------------------------->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="myModalLabel">Advance Search Form</h3>
    </div>

    <div class="modal-body">
        <form class="form-horizontal" method="post" action="advance_search.php">

            <div class="control-group">
                <label class="control-label" for="inputEmail">Location Name</label>
                <div class="controls">
                    <select name="roomname" class="" required>
                        <option value="">&larr; Select location &rarr;</option>
                        <?php
                       
                        $class_query = mysqli_query($conn, "SELECT * FROM room") or die(mysqli_error($conn));
                        while ($location_row = mysqli_fetch_array($class_query)) {
                            echo "<option value='" . $location_row['roomname'] . "'>" . $location_row['roomname'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputEmail">Device Name</label>
                <div class="controls">
                    <select name="dc_name" class="" required>
                        <option value="">&larr; Select Device Name &rarr;</option>
                        <?php
    $device_query = mysqli_query($conn, "SELECT dc_name FROM all_desktop_computer") or die(mysqli_error($conn));
    while ($device_row = mysqli_fetch_array($device_query)) {
        echo "<option value='" . $device_row['dc_name'] . "'>" . $device_row['dc_name'] . "</option>";
    }
?>

                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputEmail">Device Serial Number</label>
                <div class="controls">
                    <select name="dc_serialno" class="" required>
                        <option value="">&larr; Select Device Serial &rarr;</option>
                        <?php
                        $serial_query = mysqli_query($conn, "SELECT * FROM all_desktop_computer WHERE dc_serialno") or die(mysqli_error($conn));
                        while ($row = mysqli_fetch_array($serial_query)) {
                            echo "<option value='" . $row['dc_serialno'] . "'>" . $row['dc_serialno'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <button type="submit" id="search" data-placement="left" title="Click to Search" class="btn btn-primary"><i class="icon-search"></i> Search</button>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $('#search').tooltip('show');
                            $('#search').tooltip('hide');
                        });
                    </script>
                </div>
            </div>

        </form>
    </div>

    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
    </div>
</div>
