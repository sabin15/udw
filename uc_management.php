<?php require('header.php') ?>

<div class = "jumbotron">
    <h2>Know your Students</h2>

    <div class="container student-filter">
            <label class="control-label col-sm-2" for="select-unit">Select Unit:</label>
            <div class="col-sm-10">
              <div class="input-group">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-tasks"></span>
               </div>
               <select class="form-control" id="select-unit" name="unitId">
                <option disabled selected> -- Select a Unit to Filter Students -- </option>
                 <option value="it1110">IT1110 Python OOPS: Object Oriented Programming</option>
                 <option value="it1113">IT1113 Software Engineering Analysis and Design</option>
                 <option value="bgmt4001">BMGT 4001 Project Management</option>
               </select>
             </div>
            </div>
          </div>
</div>

<div class="jumbotron" id="it1110-tut" style="display:none;">
    <h3>Edit Tutors</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>1234567657</td>
            <td>Melbourne</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
            <td>1234567657</td>
            <td>Melbourne</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
            <td>1234567657</td>
            <td>Melbourne</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
            
        </tr>
        </tbody>
    </table>
</div>

<div class="jumbotron" id="it1110" style="display:none;">
    <h3>Edit Students</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>1234567657</td>
            <td>Melbourne</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
            <td>1234567657</td>
            <td>Melbourne</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
            <td>1234567657</td>
            <td>Melbourne</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
            
        </tr>
        </tbody>
    </table>
</div>

<div class="jumbotron" id="it1113" style="display:none;">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            
            
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Sam</td>
            <td>Smith</td>
            <td>samsmith@example.com</td>
            <td>3453453534</td>
            <td>Sydney</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
        </tr>
        <tr>
            <td>Wilson</td>
            <td>David</td>
            <td>wilson@example.com</td>
            <td>1234567657</td>
            <td>Melbourne</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
        </tr>
        <tr>
            <td>Julia</td>
            <td>Rocky</td>
            <td>julila@example.com</td>
            <td>567567</td>
            <td>Perth</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="jumbotron" id="bgmt4001" style="display:none;">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            
            
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Sabrina</td>
            <td>Bombal</td>
            <td>sambom@example.com</td>
            <td>756765345</td>
            <td>Sydney</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
        </tr>
        <tr>
            <td>Harry</td>
            <td>Wilson</td>
            <td>harry@example.com</td>
            <td>1234567657</td>
            <td>Melbourne</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick=""></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
        </tr>
        <tr>
            <td>Rosy</td>
            <td>Mary</td>
            <td>rosy@example.com</td>
            <td>456456456</td>
            <td>Perth</td>
            <td>
                <a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details()"></span></a> <!--edit_staff_details($staffId,$staff_name,$position,$campus)-->
                <a><span class="glyphicon glyphicon-trash" onclick=""></span></a>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="jumbotron" id="addstudents" style="display:none;">
    <h2>Add Student to this unit</h2>
    <br><br>
    <div class="container student-filter">
        <label class="control-label col-sm-2" for="select-unit">Select Student:</label>
        <div class="col-sm-10">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-tasks"></span>
                </div>
                <select class="form-control" id="select-unit" name="unitId">
                    <option disabled selected> -- Select a Student from the list -- </option>
                    <option value="sabinshrestha">Sabin Shrestha</option>
                    <option value="prashantpokhrel">Prashant Pokhrel</option>
                    <option value="sarojkhanal">Saroj Khanal</option>
                </select>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary sweet-3" onclick="addStudenttoUnit()">Add Student</button>
        </div>
    </div>
</div>

<div class="jumbotron" id="addtutors" style="display:none;">
    <h2>Add Tutors to this unit</h2>
    <br><br>
    <div class="container">
        <label class="control-label col-sm-2" for="select-unit">Select Tutor:</label>
        <div class="col-sm-10">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-tasks"></span>
                </div>
                <select class="form-control" id="select-unit" name="unitId">
                    <option disabled selected> -- Select a Student from the list -- </option>
                    <option value="johnwick">John Wick</option>
                    <option value="williamsmith">William Smith</option>
                    <option value="maxwell">Max Well</option>
                </select>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary sweet-3" onclick="addTutortoUnit()">Add Tutor</button>
        </div>
    </div>
<div>


<?php require('footer.php') ?>