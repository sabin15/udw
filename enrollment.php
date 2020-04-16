<<<<<<< HEAD
<?php require('header.php') ?>

    <div class="jumbotron unit-header">
      <form class="form-inline d-flex justify-content-center" action="#">
        <div class="input-group">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-search"></span>
          </div>
          <input class="form-control form-control-lg" type="text" placeholder="Search Unit" aria-label="Search">
        </div>
      </form>
    </div>

    <div class="jumbotron" id="unit-locate">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#it1110">
              IT1110 Python OOPS: Object Oriented Programming</a>
            </h4>
          </div>
          <div id="it1110" class="panel-collapse collapse">
            <div class="panel-body">
              <h3>Available Semesters</h3>
              <p><ol>
                <li>Semester 1</li>
                <li>Semester 2</li>
                <li>Winter School</li>
                <li>Spring School</li>
              </ol>
              </p>
              <h3>Available Campuses</h3>
              <p><ol>
                <li>Pandera</li>
                <li>Rivendell</li>
                <li>Neverland</li>

              </ol>
              </p>

              <button class="btn btn-primary" onclick="enroll_form()">Enroll Now</button>

            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#it1113">
              IT1113 Software Engineering Analysis and Design</a>
            </h4>
          </div>
          <div id="it1113" class="panel-collapse collapse">
            <div class="panel-body">
              <h3>Available Semesters</h3>
              <p><ol>
                <li>Semester 1</li>
                <li>Semester 2</li>
                <li>Winter School</li>
                <li>Spring School</li>
              </ol>
              </p>
              <h3>Available Campuses</h3>
              <p><ol>
                <li>Pandera</li>
                <li>Rivendell</li>
                <li>Neverland</li>

              </ol>
              </p>

              <button class="btn btn-primary" onclick="enroll_form()">Enroll Now</button>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#bmgt4001">
              BMGT 4001 Project Management</a>
            </h4>
          </div>
          <div id="bmgt4001" class="panel-collapse collapse">
            <div class="panel-body">
              <h3>Available Semesters</h3>
              <p><ol>
                <li>Semester 1</li>
                <li>Semester 2</li>
                <li>Winter School</li>
                <li>Spring School</li>
              </ol>
              </p>
              <h3>Available Campuses</h3>
              <p><ol>
                <li>Pandera</li>
                <li>Rivendell</li>
                <li>Neverland</li>

              </ol>
              </p>

              <button class="btn btn-primary" onclick="enroll_form()">Enroll Now</button>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=" row">
      <div class="col-lg-1"></div>
      <div class="col-lg-6 enroll-form" id="enroll-form" style="display:none;" >

          <h2>Enrollment Form</h2>
          <form class="form-horizontal" action="#">
          <div class="form-group">
            <label class="control-label col-sm-2" for="select-campus">Select Campus:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-home"></span>
               </div>
               <select class="form-control" id="select-campus">
                 <option>Pandera</option>
                 <option>Rivendell</option>
                 <option>Neverland</option>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="select-sem">Select Semester:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-sem">
                 <option>Semester 1</option>
                 <option>Semester 2</option>
                 <option>Winter</option>
                 <option>Spring</option>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary sweet-3" onclick="enroll_function()">Enroll Now <span class="glyphicon glyphicon-arrow-right"></span></button>
            </div>
          </div>
        </form>

      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-3 unit-summary" id="unit-summary" style="display:none">
        <h3>IT1110 Python OOPS: Object Oriented Programming</h3>
        <h4>Faculty</h4>
        <p>Information Technology</p>

      </div>


    </div>







<?php require('footer.php') ?>
=======
<?php require('header.php') ?>

    <div class="jumbotron unit-header">
      <form class="form-inline d-flex justify-content-center" action="#">
        <div class="input-group">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-search"></span>
          </div>
          <input class="form-control form-control-lg" type="text" placeholder="Search Unit" aria-label="Search">
        </div>
      </form>
    </div>

    <div class="jumbotron" id="unit-locate">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#it1110">
              IT1110 Python OOPS: Object Oriented Programming</a>
            </h4>
          </div>
          <div id="it1110" class="panel-collapse collapse">
            <div class="panel-body">
              <h3>Available Semesters</h3>
              <p><ol>
                <li>Semester 1</li>
                <li>Semester 2</li>
                <li>Winter School</li>
                <li>Spring School</li>
              </ol>
              </p>
              <h3>Available Campuses</h3>
              <p><ol>
                <li>Pandera</li>
                <li>Rivendell</li>
                <li>Neverland</li>

              </ol>
              </p>

              <button class="btn btn-primary" onclick="enroll_form()">Enroll Now</button>

            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#it1113">
              IT1113 Software Engineering Analysis and Design</a>
            </h4>
          </div>
          <div id="it1113" class="panel-collapse collapse">
            <div class="panel-body">
              <h3>Available Semesters</h3>
              <p><ol>
                <li>Semester 1</li>
                <li>Semester 2</li>
                <li>Winter School</li>
                <li>Spring School</li>
              </ol>
              </p>
              <h3>Available Campuses</h3>
              <p><ol>
                <li>Pandera</li>
                <li>Rivendell</li>
                <li>Neverland</li>

              </ol>
              </p>

              <button class="btn btn-primary" onclick="enroll_form()">Enroll Now</button>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#bmgt4001">
              BMGT 4001 Project Management</a>
            </h4>
          </div>
          <div id="bmgt4001" class="panel-collapse collapse">
            <div class="panel-body">
              <h3>Available Semesters</h3>
              <p><ol>
                <li>Semester 1</li>
                <li>Semester 2</li>
                <li>Winter School</li>
                <li>Spring School</li>
              </ol>
              </p>
              <h3>Available Campuses</h3>
              <p><ol>
                <li>Pandera</li>
                <li>Rivendell</li>
                <li>Neverland</li>

              </ol>
              </p>

              <button class="btn btn-primary" onclick="enroll_form()">Enroll Now</button>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=" row">
      <div class="col-lg-1"></div>
      <div class="col-lg-6 enroll-form" id="enroll-form" style="display:none;" >

          <h2>Enrollment Form</h2>
          <form class="form-horizontal" action="#">
          <div class="form-group">
            <label class="control-label col-sm-2" for="select-campus">Select Campus:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-home"></span>
               </div>
               <select class="form-control" id="select-campus">
                 <option>Pandera</option>
                 <option>Rivendell</option>
                 <option>Neverland</option>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="select-sem">Select Semester:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-sem">
                 <option>Semester 1</option>
                 <option>Semester 2</option>
                 <option>Winter</option>
                 <option>Spring</option>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary sweet-3" onclick="enroll_function()">Enroll Now <span class="glyphicon glyphicon-arrow-right"></span></button>
            </div>
          </div>
        </form>

      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-3 unit-summary" id="unit-summary" style="display:none">
        <h3>IT1110 Python OOPS: Object Oriented Programming</h3>
        <h4>Faculty</h4>
        <p>Information Technology</p>

      </div>


    </div>







<?php require('footer.php') ?>
>>>>>>> 5b52427de29db2ac3ba3be035e5ae77260904766
