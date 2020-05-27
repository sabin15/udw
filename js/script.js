function load_student_form(){
  $('#staff-form').hide();
  $('#student-form').show();
}

function load_staff_form(){
  $('#student-form').hide();
  $('#staff-form').show();
}

$(document).ready(function(){
  var date_input=$('input[name="student-dob"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
    format: 'mm/dd/yyyy',
    container: container,
    todayHighlight: true,
    autoclose: true,
  })
})

function enroll_form(){
  $('#enroll-form').show();
  $('#unit-summary').show();
  $('#unit-locate').hide();


}

function enroll_function(){
  //alert("Hello");
  swal("Enrolled Successfully", "", "success");
}



function lecture_timetable(){
  $('#tutorial-timetable').hide();
  $('#lecture-timetable').show();
}

function appoint_lecturer_form(){
  $('#appoint-lecturer-form').show();
  $('#manage_lecturer').hide();
}

function edit_staff_details($staffId,$staff_name,$unit_code,$campus,$position){

	document.getElementById("edit-staff").style.display="block";
  document.getElementById("staff_id").value=$staffId;
  document.getElementById("staff_name").value=$staff_name;
  document.getElementById("edit-unit").value=$unit_code;  
  document.getElementById("edit-campus").value=$campus;
	document.getElementById("edit-position").value=$position;
  
	staffId=$staffId;
}

function edit_student_details($student_id,$student_name,$unit_name,$unit_code,$campus, $semester){

	document.getElementById("edit-student").style.display="block";
  document.getElementById("student_id").value=$student_id;
  document.getElementById("student_name").value=$student_name;
  document.getElementById("edit-unit").value=$unit_code;  
  document.getElementById("edit-campus").value=$campus;
  document.getElementById("edit-sem").value=$semester;
  
	student_id=$student_id;
}

function update_staff_details(){
  console.log(document.getElementById("edit-unit").value);
  var new_unit=document.getElementById("edit-unit").value;
  
  var new_campus=document.getElementById("edit-campus").value;
  var new_semester=document.getElementById("edit-sem").value;
  var new_position=document.getElementById("edit-position").value;
  console.log(new_unit);
  var staffId=document.getElementById("staff_id").value;
  console.log(new_unit+new_campus+new_semester+new_position);
  var action = 'update';


	$.ajax({

    type: "POST",
    url: "controller/load_edit_staff.php",
    data: {staffId:staffId,unit:new_unit, campus:new_campus, semester:new_semester,position:new_position,action:action},
    success : function(result)
      {
        alert(result);
        swal(result, "", "success");
        location.reload();
      }
    });
}

function update_student_details(){
  console.log(document.getElementById("edit-unit").value);
  var new_unit=document.getElementById("edit-unit").value;
  
  var new_campus=document.getElementById("edit-campus").value;
  var new_semester=document.getElementById("edit-sem").value;
  console.log(new_unit);
  var student_id=document.getElementById("student_id").value;
  console.log(new_unit+new_campus+new_semester+student_id);
  var action = 'update';


	$.ajax({

    type: "POST",
    url: "controller/load_edit_student.php",
    data: {student_id:student_id,unit:new_unit, campus:new_campus, semester:new_semester,action:action},
    success : function(result)
      {
        alert(result);
        swal(result, "", "success");
        location.reload();
      }
    });
}

function delete_staff(staffId, semester, unit, campus, position){
  var action = 'delete';
	$.ajax({

    type: "POST",
    url: "controller/load_edit_staff.php",
    data: {staffId:staffId,unit:unit, campus:campus, semester:semester,position:position,action:action},
    success : function(result)
      {
        alert(result);
        swal(result, "", "success");
        location.reload();
      }
    });
}

function delete_student(studentId, unit, campus, semester){
  var action = 'delete';
	$.ajax({

    type: "POST",
    url: "controller/load_edit_student.php",
    data: {studentId:studentId,unit:unit, campus:campus, semester:semester,action:action},
    success : function(result)
      {
        alert(result);
        swal(result, "", "success");
        location.reload();
      }
    });
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

// additional


function assign_campus_semester(){
  swal("Assigned Successfully", "", "success");
}

//document.getElementById("select-unit").addEventListener("change",filterStudents);
function filterStudents(){
  unit_selected = document.getElementById("select-unit").value;
  console.log(unit_selected);
  if (unit_selected == 'it1110'){
    console.log("loading students from it1110");
    $('#addstudents').show();
    $('#addtutors').show();    
    $('#it1110').show();
    $('#it1110-tut').show();
    $('#it1113').hide();
    $('#bgmt4001').hide();
        
  }
  else if (unit_selected == 'it1113'){
    console.log("loading students from it1113");
    $('#it1110').hide();
    $('#it1113').show();
    $('#bgmt4001').hide();
    $('#addstudents').show();
    $('#addtutors').show();

  }
  else{
    console.log("loading students from bgmt4001");
    $('#it1110').hide();
    $('#it1113').hide();
    $('#bgmt4001').show();
    $('#addstudents').show();
    $('#addtutors').show();

  }
}

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

function enroll_form(unit){
  console.log(unit);

  $('#enroll-form').show();
  $('#unit-summary').show();
  $('#unit-locate').hide();
  $("#select-campus").empty();
  $("#select-campus").append("<option disabled selected>Select Campus</option>");
  var elem = document.getElementById("enroll-unit-code");
  if(typeof elem !== 'undefined' && elem !== null) {
    elem.innerHTML = unit;
  }
 


  var unit_code =  unit;
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
        $("#select-campus").append("<option value='"+campus_id+"'>"+ campus_name +"</option>")
      }
        
    }

  });


}

function enroll_function(){
  //alert("Hello");
  var campus = $("#select-campus").val();
  var sem = $("#select-sem").val();
  var unit_code =  document.getElementById('enroll-unit-code').innerHTML;
  console.log("proof "+campus+" "+sem+" "+unit_code);
  $.ajax({
    url:"controller/enrollment.php",
    type:"POST",
    data: {enroll_campus:campus, enroll_sem:sem, enroll_unit:unit_code},
    success: function(data, status){
      //alert(data);
      console.log(data);
      if (data){
        swal("Enrolled Successfully", "You have been enrolled successfully", "success");
        window.location="/udw/enrollment.php";
      }
      else{
        swal("Enrollment Failed", "There might be some issue on the server", "warning");
      }
        
    }
  });  
}

function appoint_lecturer_tutor(){
  
  var campus = $("#uc-select-campus").val();
  var sem = $("#uc-select-sem").val();
  var unit = $("#uc-select-unit").val();
  var staff = $("#uc-select-staff").val();
  var position = $("#uc-select-position").val();
  alert(campus+"."+sem+"."+unit+"."+staff+"."+position);
  $.ajax({
    url:"controller/backend.php",
    type:"POST",
    data: {campus:campus, sem:sem, unit:unit, staff:staff, position:position},
    success: function(data, status){
        alert(data);
        console.log(data);
        //location.reload();
    }

  });

  
  //swal("Appointed Successfully", "", "success");
}

function lecture_timetable(){
  $('#tutorial-timetable').hide();
  $('#lecture-timetable').show();
}



// function edit_staff_details($staffId,$staff_name,$position,$campus){

// 	document.getElementById("edit-staff").style.display="block";
// 	document.getElementById("staff_id").value=$staffId;
// 	document.getElementById("staff_name").value=$staff_name;
// 	document.getElementById("staff_position").value=$position;
//   document.getElementById("select_campus").value=$campus;
// 	staffId=$staffId;
// }

// function update_staff_details(){
//   /*
// 	var new_position=document.getElementById("staff_position").value;
// 	var new_campus=document.getElementById("select_campus").value;

// 	$.ajax({

//                 type: "POST",
//                  url: "php/staff_update.php",
//                  async: false,
//                  data: {staffId:staffId,position:new_position,campus:new_campus},
//                  success : function(text)
//                  {
//                      status = text;

//                  }
//       });

// 	alert(status);
// 	location.reload();
//   */
//   swal("Successfully Updated", "", "success");
// }



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
  document.getElementById('timetable-heading').innerHTML = "Timetable for " + selected_unit;
  //document.getElementById('campus-name').innerHTML = selected_campus;
  document.getElementById('unit').value=selected_unit;
  document.getElementById('semester').value=selected_semester;
  document.getElementById('campus').value=selected_campus;
  loadtable("lecture_table", "lecture",selected_unit, selected_campus, selected_semester);
  loadtable("tutor_table", "tutorial",selected_unit, selected_campus, selected_semester);

}

function appoint_uc_lec(){
  app_unit_selected = document.getElementById("app-select-unit").value;
  staff_id = document.getElementById("app-select-staff").value;
  position = document.getElementById("app-select-position").value;
  //alert(unit_selected+" "+staff_id+position);
  $.ajax({
    url:"controller/backend.php",
    type:"POST",
    data: {app_unit_selected:app_unit_selected, staff_id:staff_id, position:position},
    success: function(data, status){
        alert(data);
        console.log(data);
        //location.reload();
    }

  });
  //swal("Appointed Successfully", "", "success");
}

function assign_staff_no(){
  unit_selected = document.getElementById("select-unit").value;
  max_staff = document.getElementById("select-staff").value;

  $.ajax({
    url:"controller/backend.php",
    type:"POST",
    data: {unit_selected:unit_selected, max_staff:max_staff},
    success: function(data, status){
        alert(data);
        console.log(data);
        //location.reload();
    }

  });
  //alert(unit_selected+max_staff);
  //swal("Appointed Successfully", "", "success");
}
function assign_campus_semester(){
  swal("Assigned Successfully", "", "success");
}

function addStudenttoUnit(){
  swal("Added Successfully", "", "success");
}

function addTutortoUnit(){
  swal("Added Successfully", "", "success");
}




function reserve_totorial_lecture(){
  alert("reached");
}


$( "#enroll-select-unit").change(function() {
  console.log($( "#enroll-select-unit").val());
  $('#all_unit_details').show();
  var action = "enroll";

  var unit_code =  $( "#enroll-select-unit").val();
  $.ajax({
    url:"controller/unit_details.php",
    type:"POST",
    data: {unit_code:unit_code, action:action},
    success: function(data, status){
      //alert(data);
      console.log(data);      
      var unit_all = JSON.parse(data);  
      console.log(unit_all[0]);
      document.getElementById("unit_name").innerHTML = unit_all[0];
      document.getElementById("unit_code").innerHTML = unit_all[1];
      document.getElementById("unit_description").innerHTML = unit_all[2];
      document.getElementById("uc_name").innerHTML = unit_all[3];      
      
    }

  });
});



