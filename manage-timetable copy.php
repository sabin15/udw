<?php
  session_start();
  if($_SESSION['logged']==false){
    header("Location:/udw/login.php");
  }
?>
<?php require('header.php') ?>
<?php include 'controller/manage_timetable.php' ?>
<script>
  $(document).ready(function() {
  $('#timetable-form').submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: '/udw/controller/manage_timetable.php',
      data: $(this).serialize(),
      success: function(data)
      {
          if (data == true) {
            window.location = 'index.php';
          }
          else {
            alert('Invalid Credentials');
            console.log(data);
          }
      }
  });
});
});
  
</script>



<div class="jumbotron-fluid">
  <form class="form-horizontal">
    <div class="form-group row">
      <label class="control-label col-sm-2" for="select-unit">Select Unit:</label>
      <div class="col-sm-10">
        <div class="input-group">
         <div class="input-group-addon">
          <span class="glyphicon glyphicon-tasks"></span>
         </div>
         <select class="form-control" id="select-unit">
         <?php
            include ('controller/load_units.php');            
          ?>
           
         </select>
       </div>
     </div>
   </div>

   <div class="form-group row">
     <label class="control-label col-sm-2" for="select-campus">Select Campus</label>
     <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <span class="glyphicon glyphicon-tasks"></span>
        </div>
        <select class="form-control" id="select-campus">
          <?php
              include ('controller/load_campus.php');            
            ?>
        </select>
      </div>
    </div>
  </div>

   <div class="form-group row">
     <label class="control-label col-sm-2" for="select-unit">Select Semester:</label>
     <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <span class="glyphicon glyphicon-tasks"></span>
        </div>
        <select class="form-control" id="select-semester">
          <?php
              include ('controller/load_semester.php');            
          ?>
        </select>
      </div>

       <div class="input-group">
         <button class="btn btn-primary" onclick="edit_timetable()">Submit</button>
       </div>

      </div>
    </div>
  </form>
</div>

<div class="jumbotron-fluid" id="edit-timetable" style="display:none;">
  <h3 id="timetable-heading"></h3>
  <div class="row">
    <div class="col-sm-6">
      <div class="jumbotron">
        <h3 id="campus-name"></h3>

        <form class="form-horizontal" method='post' action="" enctype="multipart/form-data" id="timetable-form">

          <div class="form-group">
            <label class="control-label col-sm-2" for="select-unit">Select Type:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-lec-tut">
                 <option name="type" value="lecture">Lecture</option>
                 <option name="type" value="tutorial">Tutorial</option>
              </select>
             </div>
            </div>
          </div>

          <div class="form-group ">
           <label class="control-label col-sm-2 requiredField" for="date">Start Date:</label>
           <div class="col-sm-10">
            <div class="input-group">
             <div class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
             </div>
             <input type="text" class="form-control" id="sem-start-date" name="sem-start-date" placeholder="MM/DD/YYYY" />
            </div>
           </div>
          </div>

          <div class="form-group ">
           <label class="control-label col-sm-2 requiredField" for="date">Start Time:</label>
           <div class="col-sm-10">
            <div class="input-group">
             <div class="input-group-addon">
              <span class="glyphicon glyphicon-time"></span>
             </div>
             <input type="text" class="form-control timepicker" id="sem-start-time" name="timepicker" />
            </div>
           </div>
          </div>

          <div class="form-group ">
           <label class="control-label col-sm-2 requiredField" for="date">End Date:</label>
           <div class="col-sm-10">
            <div class="input-group">
             <div class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
             </div>
             <input type="text" class="form-control" id="sem-end-date" name="sem-end-date" placeholder="MM/DD/YYYY"/>
            </div>
           </div>
          </div>



          <div class="form-group ">
           <label class="control-label col-sm-2 requiredField" for="date">End Time:</label>
           <div class="col-sm-10">
            <div class="input-group">
             <div class="input-group-addon">
              <span class="glyphicon glyphicon-time"></span>
             </div>
             <input type="text" class="form-control timepicker" id="sem-end-time" name="timepicker" />
            </div>
           </div>
          </div>

          <div class="row">
              <div class="col-lg-2"></div>

              <div class="col-lg-2"><label><input type="checkbox" name="day" value="Monday">Mon</label></div>
              <div class="col-lg-2"><label><input type="checkbox" name="day" value="Tuesday">Tue</label></div>
              <div class="col-lg-2"><label><input type="checkbox" name="day" value="Wednesday">Wed</label></div>
              <div class="col-lg-2"><label><input type="checkbox" name="day" value="Thursday">Thu</label></div>
              <div class="col-lg-2"><label><input type="checkbox" name="day" value="Friday">Fri</label></div>

          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-success" value="Create Timetable">
            </div>
          </div>
        </form>

      </div>
    </div>

    <div class="col-sm-6">
      <div class="jumbotron">
        <h3>Existing TimeTable</h3>

        <p>Lecture</p>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
              <th scope="col">Start Time</th>
              <th scope="col">End Time</th>
              <th scope="col">Days</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>11/11/2019</td>
              <td>05/03/2020</td>
              <td>11:00</td>
              <td>15:00</td>
              <td>Monday</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>11/11/2019</td>
              <td>05/03/2020</td>
              <td>11:00</td>
              <td>15:00</td>
              <td>Wednesday</td>
            </tr>

          </tbody>
        </table>

        <p>Tutor</p>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
              <th scope="col">Start Time</th>
              <th scope="col">End Time</th>
              <th scope="col">Days</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>11/11/2019</td>
              <td>05/03/2020</td>
              <td>11:00</td>
              <td>15:00</td>
              <td>Monday</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>11/11/2019</td>
              <td>05/03/2020</td>
              <td>11:00</td>
              <td>15:00</td>
              <td>Wednesday</td>
            </tr>

          </tbody>
        </table>

      </div>
    </div>

  </div>
</div>




<?php require('footer.php') ?>
