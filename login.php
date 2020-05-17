<?php require('header.php') ?>
<?php include 'controller/login.php' ?>


    <div class="container login-form">
      <div class="jumbotron col-sm-6">
        <form class="form-horizontal" method='post' action="" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Please enter email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pwd" name="password" placeholder="Please enter password">
            </div>
          </div>
          <div class="radio">
            <label class="radio-inline"><input type="radio" name="type" value="student"checked>Student</label>
            <label class="radio-inline"><input type="radio" name="type" value="staff">Staff</label>
            <br><br>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button class="btn btn-success" type="submit">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>

<?php require('footer.php') ?>