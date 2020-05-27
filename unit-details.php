<?php require('header.php') ?>
<?php include ('controller/db_connect.php');?>
<?php include ('controller/backend.php')?>
          
  
  <div class="jumbotron unit-header">
      <div class="form-group">
        <label class="control-label col-sm-2" for="enroll-select-unit">Select Unit:</label>
        <div class="col-sm-10">
          <div class="input-group">
            <div class="input-group-addon">
            <span class="glyphicon glyphicon-tasks"></span>
            </div>
            <select class="form-control" id="enroll-select-unit">
              <?php
                $sql = "SELECT * FROM unit;";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {                      
                    $unit_code = $row['code'];
                    $unit_name = $row['name'];                                                        
                    $option_value = $unit_code . " " . $unit_name;
                    
                    echo "<option value='$unit_code'>".$option_value."</option>";
                  }
                } 

              ?>
            </select>
        </div>
      </div>
    </div>

  <div id="all_unit_details" >

    
    
      
      <h2 id="unit_name"> Python OOPS: Object Oriented Programming </h2>
      <p id="unit_code"> IT 1110 </p>
      <p>Learn Object Oriented Programming in Python With Concepts</p>
      <p><b>Unit Co-ordinator </b></p>: <p id="uc_name">Prashant Pokhrel</p>
    
        
  

    
    <div class=" row">
      <div class="col-lg-1"></div>
      <div class="col-lg-6 unit-details">
        <h2>Description</h2>
        <p id="unit_description">Welcome to Object Oriented Programming With Python, One single course to start your Object Oriented Journey from Step-by-Step, This course touches each and every important concept of OOPS with it's latest version Python 3.7.</p>
        <!-- <p>OOP is one of the most important concept of programming, It is important because <br>
          1. Makes Visualization easier (Closest to real world scenarios) <br>
          2. Reuse the code, Saves time, Reduce lines of code, Shrinks your project.<br>
          3. Makes code Readable by adding a structure to data with the related methods for this data.<br>
          4. Modularity for easier troubleshooting <br>
          5. Reuse of code through inheritance <br>
          6. Flexibility through Polymorphism
        </p> -->
        <h3>Available Semesters in Campuses</h3>
        <?php loadUnits()?>
        
        
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-3 enroll-box">
        <p>Please get enrolled before classes are full.</p>
        <form method="get" action="enrollment.php">
            <button type="submit" class="btn btn-danger enroll-btn">Enroll Now</button>
        </form>

      </div>


    </div>
    </div>  
    <script>
      $(document).ready(function(){
        $('#all_unit_details').hide();
      })
    </script>

<?php require('footer.php') ?>
