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
<?php require('controller/enrollment.php')?>



    
    <div class="jumbotron">
        <h3>Enrolled Units</h3>

        <table class="table table-hover" id="enrolled_table">
          <thead>
            <tr>
              
              <th data-field="unit">Unit</th>
              <th data-field="campus">Campus</th>
              <th data-field="semester">Semester</th>
              <th data-field="type">type</th>
              <th data-field="start_date">Start Date</th>
              <th data-field="end_date">End Date</th>
              <th data-field="start_time">Start Time</th>
              <th data-field="end_time">End Time</th>
              <th data-field="day">Day</th>
              
              

            </tr>
          </thead>
        </table>

      </div>




<script>
$( "#select-campus" ).change(function() {
  $("#select-sem").empty();
  $("#select-sem").append("<option disabled selected>Select Semester</option>");
  var unit_code =  document.getElementById('enroll-unit-code').innerHTML;
  console.log("called it."+unit_code);
  var campus_code = $( "#select-campus" ).val();
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
        $("#select-sem").append("<option value='"+sem_id+"'>"+ sem_name +"</option>")
      }
        
    }

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
