<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
        if(!isset($_SESSION['type']) || $_SESSION['type']!='uc'){
          header("Location:/udw/index.php");
        }         
      
    } 
?>
<?php require('header.php') ?>
<?php require('controller/db_connect.php')?>
<?php require('controller/backend.php')?>


        <div class="jumbotron">
          <button class="btn btn-primary" onclick="appoint_lecturer_form()">Appoint Lecturer</button>
          <button class="btn btn-primary" onclick="manage_lecturer()">Manage Staff</button>
        </div>

        <div class="jumbotron" id="appoint-lecturer-form">
          <h2>Appoint lecturer Form</h2>
        <form class="form-horizontal">

        <div class="form-group">
            <label class="control-label col-sm-2" for="uc-select-unit">Select Unit:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               
               <select class="form-control" id="uc-select-unit">
                
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
            <label class="control-label col-sm-2" for="select-campus">Select Campus:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-home"></span>
               </div>
               <select class="form-control" id="uc-select-campus">
               <option disabled selected>Select Campus</option>
                <?php

                  // $sql = "SELECT * FROM campus;";
                  // $result = mysqli_query($conn, $sql);

                  // if (mysqli_num_rows($result) > 0) {
                  //   // output data of each row
                  //   while($row = $result->fetch_assoc()) {                      
                  //     $id = $row['id'];
                  //     $name = $row['name'];                                                        
                  //     echo "<option value='$id'>".$name."</option>";
                  //   }
                  // } 

                  ?>
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
               <select class="form-control" id="uc-select-sem">
               <option disabled selected>Select Semester</option>
                <?php

                  // $sql = "SELECT * FROM semester;";
                  // $result = mysqli_query($conn, $sql);

                  // if (mysqli_num_rows($result) > 0) {
                  //   // output data of each row
                  //   while($row = $result->fetch_assoc()) {                      
                  //     $id = $row['id'];
                  //     $name = $row['name'];                                                        
                  //     echo "<option value='$id'>".$name."</option>";
                  //   }
                  // } 

                  ?>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="uc-select-staff">Select Staff:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="uc-select-staff">
                <option disabled selected>Select Staff</option>
                <?php

                  // $sql = "SELECT DISTINCT a.staff_id, s.name FROM appoint_staff a, staff s where a.staff_id = s.id;";
                  // $result = mysqli_query($conn, $sql);

                  // if (mysqli_num_rows($result) > 0) {
                  //   // output data of each row
                  //   while($row = $result->fetch_assoc()) {                      
                  //     $staff_id = $row['staff_id'];
                  //     $name = $row['name'];                                                        
                  //     echo "<option value='$id'>".$name."</option>";
                  //   }
                  // } 

                  ?> 
                 
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
               <select class="form-control" id="uc-select-position">
                 <option value="lecturer">Lecturer</option>
                 <option value="tutor">Tutor</option>
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

<script>
$( "#uc-select-unit" ).change(function() {
  $("#uc-select-staff").empty();
  $("#uc-select-campus").empty();

  $("#uc-select-staff").append("<option disabled selected>Select Staff</option>");
  $("#uc-select-campus").append("<option disabled selected>Select Campus</option>");

  var unit_code =  $( "#uc-select-unit" ).val();
  $.ajax({
    url:"controller/backend.php",
    type:"POST",
    data: {unit_code:unit_code},
    success: function(data, status){
      //alert(data);
      //console.log(data);      
      var staffs_for_selected_units = JSON.parse(data);      
      for (var staff_id in staffs_for_selected_units){
        console.log( staff_id, staffs_for_selected_units[staff_id] );
        var staff_name = staffs_for_selected_units[staff_id];
        $("#uc-select-staff").append("<option value='"+staff_id+"'>"+ staff_name +"</option>")
      }
        
    }

  });

  //loading campus associated with the selected unit
  $.ajax({
    url:"controller/backend.php",
    type:"POST",
    data: {unit_code_for_campus:unit_code},
    success: function(data, status){
      // alert(data);
      // console.log(data);      
      var campus_for_selected_units = JSON.parse(data);      
      for (var campus_id in campus_for_selected_units){
        console.log( campus_id, campus_for_selected_units[campus_id] );
        var campus_name = campus_for_selected_units[campus_id];
        $("#uc-select-campus").append("<option value='"+campus_id+"'>"+ campus_name +"</option>")
      }
        
    }

  });
});


$( "#uc-select-campus" ).change(function() {
  $("#uc-select-sem").empty();
  $("#uc-select-sem").append("<option disabled selected>Select Semester</option>");
  var unit_code =  $( "#uc-select-unit" ).val();
  var campus_code = $( "#uc-select-campus" ).val();
  $.ajax({
    url:"controller/backend.php",
    type:"POST",
    data: {unit_code_for_sem:unit_code, campus_code_for_sem:campus_code},
    success: function(data, status){
      //alert(data);
      console.log(data);      
      var sem_for_selected_campus = JSON.parse(data);      
      for (var sem_id in sem_for_selected_campus){
        console.log( sem_id, sem_for_selected_campus[sem_id] );
        var sem_name = sem_for_selected_campus[sem_id];
        $("#uc-select-sem").append("<option value='"+sem_id+"'>"+ sem_name +"</option>")
      }
        
    }

  });
});

//checking method
$("#uc-select-staff").change(function() {
  console.log($("#uc-select-staff").val());
});


</script>

<?php require('footer.php') ?>
