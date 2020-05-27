<form class="form-horizontal" action="#">
          <br><br>


          <div class="form-group">
            <label class="control-label col-sm-2" for="app-select-unit">Select Unit:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="app-select-unit">
                <?php
                  $sql = "SELECT * FROM unit;";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {                      
                      $unit_code = $row['code'];
                      $unit_name = $row['name'];                                                        
                      $option_value = $unit_code . " " . $unit_name;
                      echo "<option value='$unit_code'>".$option_value."</option>";
                    }
                  } 

                ?>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="app-select-staff">Select Staff:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="app-select-staff">

                <?php
                    $sql = "SELECT * FROM `staff`";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {                      
                        $staff_id = $row['id'];
                        $staff_name = $row['name'];                                                        
                        //$option_value = $unit_code . " " . $unit_name;
                        echo "<option value='$staff_id'>".$staff_name."</option>";
                      }
                    } 

                  ?>
                 <!-- <option>Sabin Shrestha</option>
                 <option>Prashant Pokhrel</option>
                 <option>David Bombal</option>
                 <option>Alex Smith</option> -->

               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="app-select-position">Position:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="app-select-position">
                 <option value="uc">Unit Co-ordinator</option>
                 <option value="lecturer">Lecturer</option>
                 <option value="tutor">Tutor</option>                 
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary sweet-3" onclick="appoint_uc_lec();return false;">Appoint</button>
            </div>
          </div>
        </form>