<?php require('header.php') ?>

        <div class="jumbotron">
          <button class="btn btn-primary" onclick="appoint_lecturer_form()">Appoint Lecturer</button>
          <button class="btn btn-primary" onclick="manage_lecturer()">Manage Staff</button>
        </div>

        <div class="jumbotron" id="appoint-lecturer-form">
          <h2>Appoint lecturer Form</h2>
          <form class="form-horizontal" action="#">
          <div class="form-group">
            <label class="control-label col-sm-2" for="select-campus">Select Campus:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-home"></span>
               </div>
               <select class="form-control" id="select-campus">
                 <option>Pandera</option>
                 <option>Rivendell</option>
                 <option>Neverland</option>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="select-sem">Select Semester:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-sem">
                 <option>Semester 1</option>
                 <option>Semester 2</option>
                 <option>Winter</option>
                 <option>Spring</option>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="select-unit">Select Unit:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-unit">
                 <option>IT1110 Python OOPS: Object Oriented Programming</option>
                 <option>IT1113 Software Engineering Analysis and Design</option>
                 <option>BMGT 4001 Project Management</option>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="select-staff">Select Staff:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-staff">
                 <option>11224 Sabin Shrestha</option>
                 <option>11225 Prashant Pokhrel</option>
                 <option>11226 Max Well</option>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="select-position">Position:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-position">
                 <option>Lecturer</option>
                 <option>Tutor</option>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="button" class="btn btn-primary sweet-3" onclick="appoint_lecturer_tutor()">Appoint</button>
            </div>
          </div>
        </form>
        </div>

        <div class="jumbotron" id="manage_lecturer" style="display:none;">
          <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Staff name</th>
                                        <th>Position</th>
                                        <th>Campus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Prashant Pokhrel</td>
                                            <td>Lecturer</td>
                                            <td>Rivendell</td>
                                            <td>
                                              <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                                              <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Sabin Shrestha</td>
                                            <td>Lecturer</td>
                                            <td>Rivendell</td>
                                            <td>
                                              <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a>
                                              <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Max Well</td>
                                            <td>Tutor</td>
                                            <td>Pandera</td>
                                            <td>
                                              <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a>
                                              <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>James Bond</td>
                                            <td>Tutor</td>
                                            <td>Neverland</td>
                                            <td>
                                              <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a>
                                              <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>William Simpson</td>
                                            <td>Lecturer</td>
                                            <td>Neverland</td>
                                            <td>
                                                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a>
                                                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                    </div>
                </div>

            </div>
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
