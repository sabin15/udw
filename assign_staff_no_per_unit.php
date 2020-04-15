<form class="form-horizontal" action="#">
          <br><br>


          <div class="form-group">
            <label class="control-label col-sm-2" for="select-unit">Select Unit:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-unit">
                 <option>IT1110 Python OOPS: Object Oriented Programming</option>
                 <option>IT1113 Software Engineering Analysis and Design</option>
                 <option>BMGT 4001 Project Management</option>
               </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="select-staff">Select No of Staffs:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-staff">
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5</option>
                 <option>6</option>
                 <option>7</option>
                 <option>8</option>
                 <option>9</option>
                 <option>10</option>
            </select>
             </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary sweet-3" onclick="assign_staff_no()">Appoint</button>
            </div>
          </div>
        </form>
