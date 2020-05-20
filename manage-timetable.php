<?php
  session_start();
  if($_SESSION['logged']==false){
    header("Location:/udw/login.php");
  }
?>
<?php require('header.php') ?>
<?php include 'controller/manage_timetable.php' ?>
<script>
  $(document).ready(function() {
  $('#timetable-form').submit(function(e) {
    e.preventDefault();
    console.log($(this).serialize());
    $.ajax({
      type: "POST",
      url: '/udw/controller/manage_timetable.php',
      data: $(this).serialize(),
      success: function(data)
      {
       
          if (data == true) {
            alert("data added successsfully");
            edit_timetable();

            //window.location = 'index.php';
          }
          else {
            alert(data);
            console.log(data);
          }
      }
  });
});
});
  
</script>



<div class="jumbotron-fluid">
  <form class="form-horizontal" action="#">
    <div class="form-group row">
      <label class="control-label col-sm-2" for="select-unit">Select Unit:</label>
      <div class="col-sm-10">
        <div class="input-group">
         <div class="input-group-addon">
          <span class="glyphicon glyphicon-tasks"></span>
         </div>
         <select class="form-control" id="select-unit">
         <?php
            include ('controller/load_units.php');            
          ?>
           
         </select>
       </div>
     </div>
   </div>

   <div class="form-group row">
     <label class="control-label col-sm-2" for="select-campus">Select Campus</label>
     <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <span class="glyphicon glyphicon-tasks"></span>
        </div>
        <select class="form-control" id="select-campus">
          <?php
              include ('controller/load_campus.php');            
            ?>
        </select>
      </div>
    </div>
  </div>

   <div class="form-group row">
     <label class="control-label col-sm-2" for="select-unit">Select Semester:</label>
     <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <span class="glyphicon glyphicon-tasks"></span>
        </div>
        <select class="form-control" id="select-semester">
          <?php
              include ('controller/load_semester.php');            
          ?>
        </select>
      </div>

       <div class="input-group">
         <button class="btn btn-primary" onclick="edit_timetable()">Submit</button>
       </div>

      </div>
    </div>
  </form>
</div>

<div class="jumbotron-fluid" id="edit-timetable" style="display:none;">
  <h3 id="timetable-heading"></h3>
  <div class="row">
    <div class="col-sm-4">
      <div class="jumbotron">
        <h3 id="campus-name"></h3>

        <form class="form-horizontal" method='post' action="" enctype="multipart/form-data" id="timetable-form">
        <input type="text" id="unit" value="" name="unit" style="display:none;">
        <input type="text" id="campus" value="" name="campus" style="display:none;">
        <input type="text" id="semester" value="" name="semester" style="display:none;">

          <div class="form-group">
            <label class="control-label col-sm-2" for="select-unit">Select Type:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-lec-tut" name="type">
                 <option value="lecture">Lecture</option>
                 <option value="tutorial">Tutorial</option>
              </select>
             </div>
            </div>
          </div>

          <div class="form-group ">
           <label class="control-label col-sm-2 requiredField" for="date">Start Date:</label>
           <div class="col-sm-10">
            <div class="input-group">
             <div class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
             </div>
             <input type="text" class="form-control" id="sem-start-date" name="sem-start-date" placeholder="MM/DD/YYYY" />
            </div>
           </div>
          </div>

          <div class="form-group ">
           <label class="control-label col-sm-2 requiredField" for="date">Start Time:</label>
           <div class="col-sm-10">
            <div class="input-group">
             <div class="input-group-addon">
              <span class="glyphicon glyphicon-time"></span>
             </div>
             <input type="text" class="form-control timepicker" id="sem-start-time" name="sem-start-time" />
            </div>
           </div>
          </div>

          <div class="form-group ">
           <label class="control-label col-sm-2 requiredField" for="date">End Date:</label>
           <div class="col-sm-10">
            <div class="input-group">
             <div class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
             </div>
             <input type="text" class="form-control" id="sem-end-date" name="sem-end-date" placeholder="MM/DD/YYYY"/>
            </div>
           </div>
          </div>



          <div class="form-group ">
           <label class="control-label col-sm-2 requiredField" for="date">End Time:</label>
           <div class="col-sm-10">
            <div class="input-group">
             <div class="input-group-addon">
              <span class="glyphicon glyphicon-time"></span>
             </div>
             <input type="text" class="form-control timepicker" id="sem-end-time" name="sem-end-time" />
            </div>
           </div>
          </div>

          <div class="row">
              <div class="col-lg-2"></div>

              <div class="col-lg-2"><label><input type="checkbox" name="day1" value="Monday">Mon</label></div>
              <div class="col-lg-2"><label><input type="checkbox" name="day2" value="Tuesday">Tue</label></div>
              <div class="col-lg-2"><label><input type="checkbox" name="day3" value="Wednesday">Wed</label></div>
              <div class="col-lg-2"><label><input type="checkbox" name="day4" value="Thursday">Thu</label></div>
              <div class="col-lg-2"><label><input type="checkbox" name="day5" value="Friday">Fri</label></div>

          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Create Timetable">
            </div>
          </div>
        </form>

      </div>
    </div>

    <div class="col-sm-8">
      <div class="jumbotron">
        <h3>Existing TimeTable</h3>

        <p>Lecture</p>
        <table class="table table-hover" id="lecture_table">
          <thead>
            <tr>
              <th data-field="type">Type</th>
              <th data-field="unit">Unit</th>
              <th data-field="campus">Campus</th>
              <th data-field="semester">Semester</th>
              <th data-field="start_date">Start Date</th>
              <th data-field="end_date">End Date</th>
              <th data-field="start_time">Start Time</th>
              <th data-field="end_time">End Time</th>
              <th data-field="day">Day</th>
            </tr>
          </thead>
        </table>


        <p>Tutor</p>
        <table class="table table-hover" id="tutor_table">
          <thead>
            <tr>
              <th data-field="type">Type</th>
              <th data-field="unit">Unit</th>
              <th data-field="campus">Campus</th>
              <th data-field="semester">Semester</th>
              <th data-field="start_date">Start Date</th>
              <th data-field="end_date">End Date</th>
              <th data-field="start_time">Start Time</th>
              <th data-field="end_time">End Time</th>
              <th data-field="day">Day</th>
            </tr>
          </thead>
        </table>

      </div>
    </div>

  </div>
</div>




<script>
  function loadtable(tablename, type, unit, campus, semester){
    $('#' + tablename).bootstrapTable('destroy'); 
    $.post( 
        "/udw/controller/load_timetable.php",
        {type, unit, campus, semester},
        function(data) {
          console.log(data);
          $('#' + tablename).bootstrapTable({
              data: data
          });
      },
      "json"
    );

  }
</script>
<?php require('footer.php') ?>
