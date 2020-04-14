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
