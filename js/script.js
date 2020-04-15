function load_student_form(){
  $('#staff-form').hide();
  $('#student-form').show();
}

function load_staff_form(){
  $('#student-form').hide();
  $('#staff-form').show();
}



$( function() {
    $( "#student-dob" ).datepicker();
    $( "#sem-start-date" ).datepicker();
    $( "#sem-end-date" ).datepicker();
  } );

$( function() {
  $('.timepicker').timepicker({
  timeFormat: 'h:mm p',
  interval: 30,
  minTime: '8',
  maxTime: '8:00pm',
  defaultTime: '11',
  startTime: '8:00',
  dynamic: false,
  dropdown: true,
  scrollbar: true
});
} );



// $(document).ready(function(){
//   var date_input=$('input[name="student-dob"]'); //our date input has the name "date"
//   var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
//   date_input.datepicker({format: 'mm/dd/yyyy', container: container,todayHighlight: true,autoclose: true})
// })

function enroll_form(){
  $('#enroll-form').show();
  $('#unit-summary').show();
  $('#unit-locate').hide();


}

function enroll_function(){
  //alert("Hello");
  swal("Enrolled Successfully", "", "success");
}

function appoint_lecturer_tutor(){
  //alert("Hello");
  swal("Appointed Successfully", "", "success");
}

function lecture_timetable(){
  $('#tutorial-timetable').hide();
  $('#lecture-timetable').show();
}

function appoint_lecturer_form(){
  $('#appoint-lecturer-form').show();
  $('#manage_lecturer').hide();
}

function edit_staff_details($staffId,$staff_name,$position,$campus){

	document.getElementById("edit-staff").style.display="block";
	document.getElementById("staff_id").value=$staffId;
	document.getElementById("staff_name").value=$staff_name;
	document.getElementById("staff_position").value=$position;
  document.getElementById("select_campus").value=$campus;
	staffId=$staffId;
}

function update_staff_details(){
  /*
	var new_position=document.getElementById("staff_position").value;
	var new_campus=document.getElementById("select_campus").value;

	$.ajax({

                type: "POST",
                 url: "php/staff_update.php",
                 async: false,
                 data: {staffId:staffId,position:new_position,campus:new_campus},
                 success : function(text)
                 {
                     status = text;

                 }
      });

	alert(status);
	location.reload();
  */
  swal("Successfully Updated", "", "success");
}

function manage_lecturer(){
  $('#appoint-lecturer-form').hide();
  $('#manage_lecturer').show();
}

function tutorial_timetable(){
  $('#tutorial-timetable').show();
  $('#lecture-timetable').hide();
}


function enable_semester(ID){
  var checkBox=document.getElementById(ID);
  if (checkBox.checked == true){
    document.getElementById(ID+String('_sem_1')).disabled = false;
    document.getElementById(ID+String('_sem_2')).disabled = false;
    document.getElementById(ID+String('_sem_win')).disabled = false;
    document.getElementById(ID+String('_sem_spr')).disabled = false;
  }
  else{
    document.getElementById(ID+String('_sem_1')).disabled = true;
    document.getElementById(ID+String('_sem_2')).disabled = true;
    document.getElementById(ID+String('_sem_win')).disabled = true;
    document.getElementById(ID+String('_sem_spr')).disabled = true;
  }

}

function edit_timetable(){
  var selected_unit = document.getElementById('select-unit').value;
  var selected_semester = document.getElementById('select-semester').value;
  var selected_campus = document.getElementById('select-campus').value;
  $('#edit-timetable').show();
  document.getElementById('timetable-heading').innerHTML = "Timetable for " + selected_unit + " on "+ selected_semester;
  document.getElementById('campus-name').innerHTML = selected_campus;
}

function appoint_uc_lec(){
  swal("Appointed Successfully", "", "success");
}
function assign_staff_no(){
  swal("Appointed Successfully", "", "success");
}
function assign_campus_semester(){
  swal("Assigned Successfully", "", "success");
}
