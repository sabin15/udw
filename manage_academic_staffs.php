<?php require('header.php') ?>

        <div class="jumbotron" id="edit-staff">
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
                     <option value="lecturer">Lecturer</option>
                     <option value="tutor">Tutor</option>
                   </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Campus</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="select_campus">
                     <option value="1">Pandera</option>
                     <option value="2">Rivendell</option>
                     <option value="3">Neverland</option>
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
