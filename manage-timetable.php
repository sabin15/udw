<?php require('header.php') ?>


<div class="jumbotron-fluid">
  <form class="form-horizontal" action="#">
    <div class="form-group row">
      <label class="control-label col-sm-2" for="select-unit">Select Unit:</label>
      <div class="col-sm-10">
        <div class="input-group">
         <div class="input-group-addon">
          <span class="glyphicon glyphicon-tasks"></span>
         </div>
         <select class="form-control" id="select-unit">
           <option value="IT1110">IT1110 Python OOPS: Object Oriented Programming</option>
           <option value="IT1113">IT1113 Software Engineering Analysis and Design</option>
           <option value="BMGT4001">BMGT4001 Project Management</option>
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
          <option value="Pandera">Pandera</option>
          <option value="Rivendell">Rivendell</option>
          <option value="Neverland">Neverland</option>
        </select>
      </div>
    </div>
  </div>

   <div class="form-group row">
     <label class="control-label col-sm-2" for="select-unit">Select Unit:</label>
     <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <span class="glyphicon glyphicon-tasks"></span>
        </div>
        <select class="form-control" id="select-semester">
          <option value="semester1">Semester 1</option>
          <option value="semester2">Semester 2</option>
          <option value="winter">Winter</option>
          <option value="spring">Spring</option>
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

        <form>

          <div class="form-group">
            <label class="control-label col-sm-2" for="select-unit">Select Unit:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-lec-tut">
                 <option>Lecture</option>
                 <option>Tutorial</option>
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

              <div class="col-lg-2"><label><input type="checkbox" value="Monday">Mon</label></div>
              <div class="col-lg-2"><label><input type="checkbox" value="Tuesday">Tue</label></div>
              <div class="col-lg-2"><label><input type="checkbox" value="Wednesday">Wed</label></div>
              <div class="col-lg-2"><label><input type="checkbox" value="Thursday">Thu</label></div>
              <div class="col-lg-2"><label><input type="checkbox" value="Friday">Fri</label></div>

          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Create Timetable  <span class="glyphicon glyphicon-arrow-right"></span></button>
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
