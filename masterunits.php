<?php require('header.php') ?>
<?php require('controller/db_connect.php')?>

     <div class="container">
        <div class="jumbotron">
            <h2>Add a new Unit</h2><br>
            <form>

                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Unit Code</label>
                    <div class="col-sm-5">
                    <input type="type" class="form-control form-control-lg" id="unit_code" name="unit_code" placeholder="Enter Unit Code." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Unit Name</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control form-control-lg" id="unit_name" name = "unit_name" placeholder="Unit Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Unit Description</label>
                    <div class="col-sm-5">
                    <input type="textarea " rows="3" class="form-control form-control-lg" id="unit_description" name="unit_description" placeholder="Unit Description" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                    <div class="col-sm-5">
                    <button type="submit" class="btn btn-success" onclick="add_unit()">Add Unit</button>
                    </div>
                </div>

            </form>
        </div>
     </div>



    <!-- Campus and Semester Assignment  -->
        <div class="container" id="unit-list">
            <div class="jumbotron">
                <h2>Campus and Semester Assignment</h2><br><br>
                <div class="panel-group" id="accordion">
                    
                    <?php
                        
                        $sql = "SELECT * FROM unit;";
                        $result = $conn->query($sql);
          
                        if ($result->num_rows > 0) {
                            $number = 1;
                            while($row = $result->fetch_assoc()) {
                              //$id = $row["id"];
                              $unit_code = $row["code"];
                              $unit_name = $row["name"];
                              $description = $row["description"];
                              //$semester = $row["semester"];
                              ?>
                                                              
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $unit_code ?>">
                                            <?php echo $unit_name?></a>
                                        </h4>
                                    </div>

                                    <div id="<?php echo $unit_code ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        <div class="row"><div class="col-lg-5"><label><h3><input type="checkbox" id="<?php echo $unit_code ?>_pan" value="pandora"  onclick="enable_semester('<?php echo $unit_code ?>_pan')">Pandora Campus</h3></label></div></div>
                                                <div class="row">
                                                    <div class="col-lg-2"></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_pan_sem_1" value="sem1" disabled>Semester 1</label></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_pan_sem_2" value="sem2" disabled>Semester 2</label></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_pan_sem_win" value="winter" disabled>Winter School</label></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_pan_sem_spr" value="spring" disabled>Spring School</label></div>
                                                </div>
                                                <div class="row"><div class="col-lg-5"><label><h3><input type="checkbox" value="" id="<?php echo $unit_code ?>_riv" value="rivendell"  onclick="enable_semester('<?php echo $unit_code ?>_riv')" >Rivaldell Campus</h3></label></div></div>
                                                <div class="row">
                                                    <div class="col-lg-2"></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_riv_sem_1" value="" disabled>Semester 1</label></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_riv_sem_2" value="" disabled>Semester 2</label></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_riv_sem_win" value="" disabled>Winter School</label></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_riv_sem_spr" value="" disabled>Spring School</label></div>
                                                </div>
                                                <div class="row"><div class="col-lg-5"><label><h3><input type="checkbox" value="" id="<?php echo $unit_code ?>_nev" onclick="enable_semester('<?php echo $unit_code ?>_nev')">Neverland Campus</h3></label></div></div>
                                                <div class="row">
                                                    <div class="col-lg-2"></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_nev_sem_1" value="" disabled>Semester 1</label></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_nev_sem_2" value="" disabled>Semester 2</label></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_nev_sem_win" value="" disabled>Winter School</label></div>
                                                    <div class="col-lg-2"><label><input type="checkbox" id="<?php echo $unit_code ?>_nev_sem_spr" value="" disabled>Spring School</label></div>
                                                </div>
                                                <br><br>
                                                <center><button type="button" class="btn btn-success" onclick="assign_campus_semester('<?php echo $unit_code?>')">Save Changes</button><center>

                                        </div>
                                    </div>
                                </div>
                                
                                

                              <?php
                              $number++;
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>

                    <?php
                        

                    
                    ?>
                

                    
                </div>
            </div>
        </div>
    <!-- Campus and Semester Assignment  -->

<?php require('footer.php') ?>
<script>
    //master-Units page script

//***************add new unit*************/

function add_unit(){
    
    var unit_code = $("#unit_code").val();
    var unit_name = $("#unit_name").val();
    var unit_description = $("#unit_description").val();
   
  
    $.post("controller/backend.php",{
        unit_code:unit_code,
        unit_name:unit_name,
        unit_description:unit_description    
        },function(data, status){
        //$("#updateUnitModal").modal("hide");
        alert(data);
        //location.reload();
  
        }
    );
  
  }
  
  function assign_campus_semester(unit_code){
    var pan_sem_1 = $("#"+unit_code+"_pan_sem_1").is(":checked");
    var pan_sem_2 = $("#"+unit_code+"_pan_sem_2").is(":checked");
    var pan_sem_win = $("#"+unit_code+"_pan_sem_win").is(":checked");
    var pan_sem_spr = $("#"+unit_code+"_pan_sem_spr").is(":checked");
  
    var riv_sem_1 = $("#"+unit_code+"_riv_sem_1").is(":checked");
    var riv_sem_2 = $("#"+unit_code+"_riv_sem_2").is(":checked");
    var riv_sem_win = $("#"+unit_code+"_riv_sem_win").is(":checked");
    var riv_sem_spr = $("#"+unit_code+"_riv_sem_spr").is(":checked");
  
    var nev_sem_1 = $("#"+unit_code+"_nev_sem_1").is(":checked");
    var nev_sem_2 = $("#"+unit_code+"_nev_sem_2").is(":checked");
    var nev_sem_win = $("#"+unit_code+"_nev_sem_win").is(":checked");
    var nev_sem_spr = $("#"+unit_code+"_nev_sem_spr").is(":checked");
  
    if(pan_sem_1 || pan_sem_2 || pan_sem_win || pan_sem_spr || riv_sem_1 || riv_sem_2 || riv_sem_win || riv_sem_spr || nev_sem_1 || nev_sem_2 || nev_sem_win || nev_sem_spr ){
        $.ajax({
                url:"controller/backend.php",
                type:"POST",
                data: {unit_code:unit_code, 
                    pan_sem_1:pan_sem_1, pan_sem_2:pan_sem_2, pan_sem_win:pan_sem_win, pan_sem_spr:pan_sem_spr,
                    riv_sem_1:riv_sem_1, riv_sem_2:riv_sem_2, riv_sem_win:riv_sem_win, riv_sem_spr:riv_sem_spr,
                    nev_sem_1:nev_sem_1, nev_sem_2:nev_sem_2, nev_sem_win:nev_sem_win, nev_sem_spr:nev_sem_spr,
                },
                success: function(data, status){
                    alert(data);
                    console.log(data);
                    location.reload();
              }
  
          });
    }
  
    
    
  
    
  }


</script>
