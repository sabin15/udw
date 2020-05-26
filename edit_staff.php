<?php
  session_start();
  if($_SESSION['logged']==false){
    header("Location:/udw/login.php");
  }
?>
<?php require('header.php') ?>
<?php include 'controller/load_edit_staff.php' ?>



      <div class="jumbotron">
        <h3>Existing TimeTable</h3>

       
        <table class="table table-hover" id="staff_table">
          <thead>
            <tr>
              <th data-field="staff_name">Staff Name</th>
              <th data-field="unit_code">Unit Code</th>
              <th data-field="unit_name">Unit Name</th>
              <th data-field="campus_name">Campus</th>
              <th data-field="sem_name">Semester</th>
              <th data-field="position">Position</th>
              <th></th>
              
            </tr>
            <?php
                loadtable();
             ?>
          </thead>
        </table>
      </div>

      <div class="jumbotron" id="edit-staff" style="display:none;">
          <div class="container">
              <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Staff ID</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="staff_id" name="staff_id" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Staff Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="staff_name" name="staff_name" disabled>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Position</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="staff_position">
                     <option>Lecturer</option>
                     <option>Tutor</option>
                   </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Campus</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="select_campus">
                     <option>Pandera</option>
                     <option>Rivendell</option>
                     <option>Neverland</option>
                   </select>
                </div>
                <div class="form-group row">
                  <div class="offset-sm-3 offset-md-3 col-sm-10">
                    <button class="btn btn-primary" onclick="update_staff_details()">Change Updates</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>



<?php require('footer.php') ?>
