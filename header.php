<!DOCTYPE html>
<html>
<head>
  <title>CMS Solution</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>-->

  <link rel = "stylesheet" type="text/css" href="style/style.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style/timetable.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min>-->
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
                    <li><a href="register.php">Register</a></li>
                    <li><a href="enrollment.php">Enrollment</a></li>
                    <li><a href="unit-details.php">Unit Details</a></li>
                    <li><a href="timetable.php">My Timetable</a></li>                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MasterList
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="masterlist.php">Academic Staffs</a></li>
                        <li><a href="masterunits.php">Master Units</a></li>
                        <li><a href="masterlist-uc.php">Manage Staff</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Management
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="lecturer.php">Lecturer</a></li>
                        <li><a href="uc_management.php">UC</a></li>                        
                        </ul>
                    </li>
                    <li><a href="manage-timetable.php">Manage Timetable</a></li>
                </ul>
                </div>
            </nav>
        </header>
