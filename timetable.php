<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
        if(!isset($_SESSION['type']) || $_SESSION['type']!='student'){
          header("Location:/udw/index.php");
        }         
      
    } 
?>

<?php require('header.php') ?>
<?php require('controller/load_new_timetable.php')?>

<div class="jumbotron">
        <h3>My Timetable</h3>

        <table class="table table-hover" id="enrolled_table">
          <thead>
            <tr>
              
                <th data-field="staff_name"></th>
                <th data-field="unit_code">Unit Code</th>
                <th data-field="unit_name">Unit Name</th>
                <th data-field="campus">Campus</th>
                <th data-field="semester">Semester</th>
                <th data-field="type">Type</th>
                <th data-field="start_date">Start Date</th>
                <th data-field="end_date">End Date</th>
                <th data-field="start_time">Start Time</th>
                <th data-field="end_time">End Time</th>
                <th data-field="day">Day</th>
              
              

            </tr>
          </thead>
        </table>

      </div>


    
      <div class="jumbotron">
        <div class="form-group">
            <label class="control-label col-sm-2" for="uc-select-unit">Filter Unit:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <form class="form-horizontal" method='get' action="" enctype="multipart/form-data" id="unit_selection">
               
                  <select class="form-control" id="select-unit" name="unit">
                      <option value="null" disabled selected> Select Unit</option>
                    
                      <?php
                      $student=$_SESSION['user_id'];

                        $sql = "SELECT * from enrollment en JOIN unit u WHERE en.unit=u.code AND student='$student'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {                      
                            $unit_code = $row['unit'];
                            $unit_name = $row['name'];
                            $campus=$row['campus'];
                            $semester=$row['semester'];                                                    
                            $option_value = $unit_code . " " . $unit_name;
                            echo "<option value='".$unit_code.'.'.$campus.'.'.$semester."'>".$option_value."</option>";
                          }
                        } 

                      ?>
                    </select>
                    <input type="submit" value="Continue">

              </form>
             </div>
            </div>
        </div>
      </div>

    <div class="jumbotron">
        <h3>Enroll in Lecture/Tutorial</h3>
        <form class="form-horizontal" method='get' action="" enctype="multipart/form-data" id="timetable_form">

       
          <table class="table table-hover" id="staff_table">
            <thead>
              <tr>
                <th data-field="staff_name"></th>
                <th data-field="unit_code">Unit Code</th>
                <th data-field="unit_name">Unit Name</th>
                <th data-field="campus">Campus</th>
                <th data-field="sem_name">Semester</th>
                <th data-field="type">Type</th>
                <th data-field="start_date">Start Date</th>
                <th data-field="end_date">End Date</th>
                <th data-field="start_time">Start Time</th>
                <th data-field="end_time">End Time</th>
                <th data-field="day">Day</th>


                <th></th>
                
              </tr>
              <?php
              if(isset($_GET['unit'])){
                $unit=$_GET['unit'];
                  load_timetable($unit);
              }
                  
              ?>
            </thead>
          </table>
          <input type="submit" value="Continue">
        </form>
    </div>
       
     





<script>
  $(document).ready(function() {
  $('#timetable_form').submit(function(e) {
    e.preventDefault();
    console.log($(this).serialize());
    $.ajax({
      type: "POST",
      url: '/udw/controller/load_new_timetable.php',
      data: $(this).serialize(),
      success: function(data)
      {
       
          if (data == true) {
            alert("data added successsfully");
            location.reload();
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


<script>
 $(document).ready(function(){
    var student_id = '<?php echo $_SESSION['user_id']?>';
    console.log(student_id);
    $('#enrolled_table').bootstrapTable('destroy');
    $.post( 
        "/udw/controller/load_timetable_final.php",
        {student_id},
        function(data) {
          console.log(data);
          $('#enrolled_table').bootstrapTable({
              data: data
          });
      },
      "json"
    );
  });
</script>


<?php require('footer.php') ?>
