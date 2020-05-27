<?php
  session_start();
  if($_SESSION['logged']==false){
    header("Location:/udw/login.php");
  }
?>
<?php require('header.php') ?>
<?php include 'controller/load_edit_student.php' ?>
<?php require('controller/backend.php')?>




      <div class="jumbotron">
        <h3>Student Summary</h3>

       
        <table class="table table-hover" id="staff_table">
          <thead>
            <tr>
              <th data-field="student_id">Student ID</th>
              <th data-field="student_name">Student Name</th>
              <th data-field="email">Email</th>
              <th data-field="unit">Unit</th>
              <th data-field="unit_code">Unit Code</th>
              <th data-field="campus">Campus</th>
              <th data-field="semester">Semester</th>
              <th></th>
              
            </tr>
            <?php
                loadtable();
             ?>
          </thead>
        </table>
      </div>

      <div class="jumbotron" id="edit-student" style="display:none;">
          <h2>Edit Staff</h2>
          <form class="form-horizontal">

          <div class="form-group">
                <label class="control-label col-sm-2">Student id:</label>
                <div class="col-sm-10">
                  <div class="input-group">
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-tasks"></span>
                  </div>
                  <input type="text" class="form-control" id="student_id" name="student_id" disabled>
                </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Student Name:</label>
                <div class="col-sm-10">
                  <div class="input-group">
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-tasks"></span>
                  </div>
                  <input type="text" class="form-control" id="student_name" name="student_name" disabled>
                </div>
                </div>
              </div>


            <div class="form-group">
                <label class="control-label col-sm-2">Unit:</label>
                <div class="col-sm-10">
                  <div class="input-group">
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-tasks"></span>
                  </div>
                  
                  <select class="form-control" id="edit-unit">
                    
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
                <label class="control-label col-sm-2" for="select-campus">Campus:</label>
                <div class="col-sm-10">
                  <div class="input-group">
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-home"></span>
                  </div>
                  <select class="form-control" id="edit-campus">
                  <option disabled selected>Select Campus</option>
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
                  <select class="form-control" id="edit-sem">
                  <option disabled selected>Select Semester</option>

                  </select>
                </div>
                </div>
              </div>
              

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button class="btn btn-primary" onclick="update_student_details();return false;">Change Updates</button>
                </div>
              </div>
        </form>
        </div>


        
<script>
$( "#edit-unit" ).change(function() {
  console.log('Unit change triggered.')
  $("#edit-campus").empty();
  $("#edit-campus").append("<option disabled selected>Select Campus</option>");
  var unit_code =  $( "#edit-unit" ).val();
  
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
        $("#edit-campus").append("<option value='"+campus_id+"'>"+ campus_name +"</option>")
      }
        
    }

  });
});


$( "#edit-campus" ).change(function() {
  $("#edit-sem").empty();
  $("#edit-sem").append("<option disabled selected>Select Semester</option>");
  var unit_code =  $( "#edit-unit" ).val();
  var campus_code = $( "#edit-campus" ).val();
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
        $("#edit-sem").append("<option value='"+sem_id+"'>"+ sem_name +"</option>")
      }
        
    }

  });
});


</script>
<?php require('footer.php') ?>