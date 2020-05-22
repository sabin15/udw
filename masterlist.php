<?php require('header.php') ?>
<?php require('controller/db_connect.php')?>


        <div class="jumbotron">
            <h2>Assign number of Staffs per Unit</h2>
            <div class=row>
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <?php require('assign_staff_no_per_unit.php')?>                

                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>


        <div class="jumbotron">
            <h2>Appoint UC / Lecturer</h2>
            <div class=row>
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <?php require('appoint_uc_lec.php')?>                

                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>

        <div class="row staff-details">
            
                <?php
                    $sql = "SELECT * FROM `staff` WHERE `type` = 'lecturer' OR `type` = 'tutor';";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                               
                        $id = $row['id'];
                        $staff_name = $row['name'];
                        $qualification = $row['qualification'];
                        $expertise = $row['expertise'];
                        ?>

                        <div class="col-lg-3 staff_detail_box">
                            <img src="images/<?php echo "$id"?>.jpg" alt="<?php echo $staff_name?>" width="100%">
                            
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <td>Name: </td>
                                        <td><?php echo $staff_name?></td>
                                    </tr>
                                    <tr>
                                        <td>Qualification: </td>
                                        <td><?php echo $qualification?></td>
                                    </tr>
                                    <tr>
                                        <td>Expertise: </td>
                                        <td><?php echo $expertise?></td>
                                    </tr>
                                    <!-- <tr>
                                        <td>Preferred Days of Teaching: </td>
                                        <td>Mon, Wed, Friday</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation Hours: </td>
                                        <td>
                                            <table class="table ">
                                            <tr><td>Mon [10:00 - 11:30]</td></tr>
                                            <tr><td>Wed [11:00 - 13:30]</td></tr>
                                            <tr><td>Wed [11:00 - 13:30]</td></tr>
                                            </table>
                                        </td>
                                    </tr> -->

                                </tbody>
                            </table>
                        </div>
                        <?php                        
                        
                      }
                    } 

                ?>


        </div>


<?php require('footer.php') ?>
