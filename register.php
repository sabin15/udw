<?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
      if(isset($_SESSION['logged']) && $_SESSION['logged']){
        header("Location:/udw/index.php");
      }
  } 
  
?>
<?php require('header.php') ?>
<!--Student Form-->
    <div class="container" id="student-form">
      <div class="jumbotron col-sm-8">

          <div class="jumbotron">
            <button class="btn btn-primary" onclick="load_student_form()">Student</button>
            <button class="btn btn-primary" onclick="load_staff_form()">Staff</button>
          </div>

        <p>Student Form</p>
        <form class="form-horizontal" method='post' action="" enctype="multipart/form-data" id="student_form">
          <div class="form-group">
            <label class="control-label col-sm-2" for="student-id">Student ID: *</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
               </div>
              <input type="text" class="form-control" id="student-id" name="user_id" placeholder="Please enter student ID" required>
            </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="student-name">Name: *</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-user"></span>
               </div>
              <input type="text" class="form-control" id="student-name" name="name" placeholder="Please enter Name" required>
             </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="student-email">Student Email: *</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-envelope"></span>
               </div>
              <input type="email" class="form-control" id="student-email" name="email" placeholder="Please enter email" required>
             </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="student-pwd">Password: *</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
               </div>
              <input type="password" class="form-control" id="student-pwd" placeholder="Enter password" minlength="6" maxlength="12" required>
             </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="confirm-student-pwd">Confirm Password: *</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
               </div>
              <input type="password" class="form-control" id="confirm-student-pwd" name="password" placeholder="Confirm password" minlength="6" maxlength="12" required>
            </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="student-address">Address:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-home"></span>
               </div>
              <input type="text" class="form-control" id="student-address" name="address" placeholder="Address">
             </div>
            </div>
          </div>

          <div class="form-group ">
           <label class="control-label col-sm-2 requiredField" for="date">Date:</label>
           <div class="col-sm-10">
            <div class="input-group">
             <div class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
             </div>
             <input type="text" class="form-control" id="student-dob" name="student-dob" placeholder="MM/DD/YYYY" />
            </div>
           </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="student-phone">Phone Number:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-earphone"></span>
               </div>
              <input type="number" class="form-control" id="student-phone" name="contact" placeholder="Phone Number" maxlength="10">
            </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" value="Register">
                <!--<button type="submit" class="btn btn-success">Register  <span class="glyphicon glyphicon-arrow-right"></span></button> -->
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--Close Student Form-->

    <!--Staff Form-->
    <div class="container" id="staff-form" style="display:none;">
      <div class="jumbotron col-sm-8">
          <div class="jumbotron">
            <button class="btn btn-primary" onclick="load_student_form()">Student</button>
            <button class="btn btn-primary" onclick="load_staff_form()">Staff</button>
          </div>
        <p>Staff Form</p>
        <form class="form-horizontal" method='post' action="" enctype="multipart/form-data" id="staff_form">
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-id">Staff ID:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
               </div>
              <input type="text" class="form-control" id="staff-id" name="user_id" placeholder="Please enter staff ID" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-name">Name</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-user"></span>
               </div>
              <input type="text" class="form-control" id="staff-name" name="staff_name" placeholder="Please enter Name" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-email">Staff Email:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-envelope"></span>
               </div>
              <input type="email" class="form-control" id="staff-email" name="staff_email" placeholder="Please enter email" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-pwd">Password:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
               </div>
              <input type="password" class="form-control" id="staff-pwd" name="staff_password" placeholder="Enter password" minlength="6" maxlength="12" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="confirm-staff-pwd">Confirm Password:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
               </div>
              <input type="password" class="form-control" id="confirm-staff-pwd" name="staff_password" placeholder="Confirm password" minlength="6" maxlength="12" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-address">Address</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-home"></span>
               </div>
              <input type="text" class="form-control" id="staff-address" name="staff_address" placeholder="Please enter address">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-qualification">Qualification</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-education"></span>
               </div>
              <input type="text" class="form-control" id="staff-qualification" name="staff_qualification" placeholder="PhD, Masters, Bachelors...">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-expertise">Expertise</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-king"></span>
               </div>
              <input type="text" class="form-control" id="staff-expertise" name="staff_expertise" placeholder="Information Systems, Human Computer Interaction, Network System...">
              </div>
            </div>
          </div>

          <div class="form-group ">
           <label class="control-label col-sm-2 requiredField" for="date">Date:</label>
           <div class="col-sm-10">
            <div class="input-group">
             <div class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
             </div>
             <input type="text" class="form-control" id="staff-dob" name="staff-dob" placeholder="MM/DD/YYYY" />
            </div>
           </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-phone">Phone Number:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-earphone"></span>
               </div>
              <input type="number" class="form-control" id="staff-phone" name="staff_contact" placeholder="Phone Number" maxlength="10">
             </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" value="Register">
              <!-- <button type="submit" class="btn btn-success">Register <span class="glyphicon glyphicon-arrow-right"></span></button> -->
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--Close Staff Form-->

<script>
  $(document).ready(function() {
  $('#staff_form').submit(function(e) {
    e.preventDefault();
    console.log($(this).serialize());
    $.ajax({
      type: "POST",
      url: '/udw/controller/staff_register.php',
      data: $(this).serialize(),
      success: function(data)
      {
       
          if (data == true) {
            alert("data added successsfully");
            window.location = '/udw/login.php';
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
  $(document).ready(function() {
  $('#student_form').submit(function(e) {
    e.preventDefault();
    console.log($(this).serialize());
    $.ajax({
      type: "POST",
      url: '/udw/controller/student_register.php',
      data: $(this).serialize(),
      success: function(data)
      {
       
          if (data == true) {
            alert("data added successsfully");
            window.location = '/udw/login.php';
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

<?php require('footer.php') ?>
