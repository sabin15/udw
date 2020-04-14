<!DOCTYPE html>
<html>
<head>
  <title>CMS Solution</title>

  <link rel = "stylesheet" type="text/css" href="style/style.css">
  <script type="text/javascript" src="js/script.js">  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
        <button class="btn btn-primary" onclick="select_form()">Student</button>
        <button class="btn btn-primary">Staff</button>
      </div>
    </div>


    <div class="container login-form">
      <div class="jumbotron col-sm-6">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Please enter email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pwd" placeholder="Please enter password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>

</body>
</html>
