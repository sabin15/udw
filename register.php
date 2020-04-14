<!DOCTYPE html>
<html>
<head>
  <title>CMS Solution</title>

  <link rel = "stylesheet" type="text/css" href="style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script type="text/javascript" src="js/script.js">  </script>
</head>
<body>
  <div class= "container-fluid">
    <header>
      <div class="logo">
      </div>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class = "navbar-header">
            <a class="navbar-brand">University of Do Well</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="login.php">Login</a></li>
            <li><a href="#">Enrollment</a></li>
            <li><a href="#">Unit Details</a></li>
            <li><a href="#">My Timetable</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container">
      <div class="jumbotron col-sm-6">
        <button class="btn btn-primary" onclick="load_student_form()">Student</button>
        <button class="btn btn-primary" onclick="load_staff_form()">Staff</button>
      </div>
    </div>


    <!--Student Form-->
    <div class="container" id="student-form">
      <div class="jumbotron col-sm-8">
        <p>Student Form</p>
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-2" for="student-id">Student ID:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="student-id" placeholder="Please enter student ID" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="student-name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="student-name" placeholder="Please enter Name" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="student-email">Student Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="student-email" placeholder="Please enter email" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="student-pwd">Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="student-pwd" placeholder="Enter password" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="confirm-student-pwd">Confirm Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="confirm-student-pwd" placeholder="Confirm password" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="student-address">Address:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="student-address" placeholder="Address">
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
              <input type="password" class="form-control" id="student-phone" placeholder="Phone Number">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--Close Student Form-->

    <!--Staff Form-->
    <div class="container" id="staff-form" style="display:none;">
      <div class="jumbotron col-sm-8">
        <p>Staff Form</p>
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-id">Staff ID:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="staff-id" placeholder="Please enter staff ID" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="staff-name" placeholder="Please enter Name" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-email">Staff Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="staff-email" placeholder="Please enter email" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="staff-pwd">Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="staff-pwd" placeholder="Enter password" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="confirm-staff-pwd">Confirm Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="confirm-staff-pwd" placeholder="Confirm password" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--Close Staff Form-->

  </div>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

</body>
</html>
