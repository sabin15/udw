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


        
        <div class="jumbotron" id="appoint-lecturer-form">
          <h2>Appoint Lecturer</h2>
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
