<?php 
require_once("db_connect.php");
//add unit
if(isset($_POST['unit_code']) && isset($_POST['unit_name']) && isset($_POST['unit_description'])){
    $unit_code = mysqli_escape_string($conn,$_POST['unit_code']);
    $unit_name = mysqli_escape_string($conn,$_POST['unit_name']);
    $unit_description = mysqli_escape_string($conn,$_POST['unit_description']);
    //echo $unit_code;
  
    $query = "INSERT INTO `unit` (`code`, `name`, `description`) VALUES ('$unit_code', '$unit_name', '$unit_description');";
    if(mysqli_query($conn, $query)){
        echo "added";
    }
    else{
        echo "not added";
    }
  }

//assign available units to different semesters and campuses
  if(isset($_POST['unit_code']) && isset($_POST['pan_sem_1'])){
    $unit_code = $_POST['unit_code'];
    $pan_sem_1  = $_POST['pan_sem_1'];
    $pan_sem_2  = $_POST['pan_sem_2'];
    $pan_sem_win = $_POST['pan_sem_win'];
    $pan_sem_spr = $_POST['pan_sem_spr'];

    $riv_sem_1  = $_POST['riv_sem_1'];
    $riv_sem_2  = $_POST['riv_sem_2'];
    $riv_sem_win = $_POST['riv_sem_win'];
    $riv_sem_spr = $_POST['riv_sem_spr'];

    $nev_sem_1  = $_POST['nev_sem_1'];
    $nev_sem_2  = $_POST['nev_sem_2'];
    $nev_sem_win = $_POST['nev_sem_win'];
    $nev_sem_spr = $_POST['nev_sem_spr'];

    if($pan_sem_1 == "true"){
        echo "1";
    }

    
    $query = "INSERT INTO `ucs` (`unit_code`, `campus_id`, `semester`) VALUES ";
    if($pan_sem_1 == "true"){
        $query = $query . " ('$unit_code', '1', '1'),";
    }
    if($pan_sem_2 == "true"){
        $query = $query . " ('$unit_code', '1', '2'),";
    }
    if($pan_sem_win == "true"){
        $query = $query . " ('$unit_code', '1', '3'),";
    }
    if($pan_sem_spr == "true"){
        $query = $query . " ('$unit_code', '1', '4'),";
    }
    
    if($riv_sem_1 == "true"){
        $query = $query . " ('$unit_code', '2', '1'),";
    }
    if($riv_sem_2 == "true"){
        $query = $query . " ('$unit_code', '2', '2'),";
    }
    if($riv_sem_win == "true"){
        $query = $query . " ('$unit_code', '2', '3'),";
    }
    if($riv_sem_spr == "true"){
        $query = $query . " ('$unit_code', '2', '4'),";
    }

    if($nev_sem_1 == "true"){
        $query = $query . " ('$unit_code', '3', '1'),";
    }
    if($nev_sem_2 == "true"){
        $query = $query . " ('$unit_code', '3', '2'),";
    }
    if($nev_sem_win == "true"){
        $query = $query . " ('$unit_code', '3', '3'),";
    }
    if($nev_sem_spr == "true"){
        $query = $query . " ('$unit_code', '3', '4'),";
    }

    $query = substr_replace($query ,"",-1);


    if(mysqli_query($conn, $query)){
        echo "Successfully added";
    }
    else{
        //echo $query;
        echo mysqli_error($conn);
        echo $query;
    }

    
  }

  //appoint maximum number of staff per unit
  if(isset($_POST['unit_selected']) && isset($_POST['max_staff'])){
    $unit_selected = $_POST['unit_selected'];
    $max_staff = $_POST['max_staff'];    
    //echo $unit_selected . $max_staff;
    
    $query = "UPDATE `unit` SET `max_staff` = '$max_staff' WHERE `unit`.`code` = '$unit_selected';";
    if(mysqli_query($conn, $query)){
        echo "added";
    }
    else{
        echo "not added";
    }
  }

  //appoint uc/lecturer
  if(isset($_POST['app_unit_selected']) && isset($_POST['staff_id']) && isset($_POST['position'])){
    $unit_selected = $_POST['app_unit_selected'];
    $staff_id = $_POST['staff_id'];
    $position = $_POST['position'];

    //echo $unit_selected . $max_staff;
    
    $query = "INSERT INTO `appoint_staff` (`id`, `unit_code`, `staff_id`, `position`) VALUES (NULL, '$unit_selected', '$staff_id', '$position');";
    if(mysqli_query($conn, $query)){        
        $query2 = "DELETE FROM `appoint_staff` WHERE `position` = 'staff' AND `staff_id` = $staff_id;";
        if(mysqli_query($conn, $query2)){
            echo "Successfully Appointed as ".$position."  for ". $unit_selected. " unit";
        }
        else{
            echo "Not successful";
        }
    }
    else{
        echo "Not successful";
    }
  }

  //staffs for selected unit
  if(isset($_POST['unit_code'])){
    $unit_code = $_POST['unit_code'];
    $staff_for_units = array();  
    $query = "SELECT DISTINCT a.staff_id, s.name FROM appoint_staff a, staff s where a.staff_id = s.id and a.unit_code='$unit_code'";
    $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {                      
                $staff_id = $row['staff_id'];
                $staff_name = $row['name'];                                                                        
                $staff_for_units[$staff_id] = $staff_name;
            }
        }
    echo json_encode($staff_for_units);
  }

   //campus for selected unit
   if(isset($_POST['unit_code_for_campus'])){
    $unit_code = $_POST['unit_code_for_campus'];
    $staff_for_units = array();  
    $query = "SELECT DISTINCT u.campus_id, c.name FROM ucs u, campus c where u.campus_id = c.id and u.unit_code='$unit_code'";
    $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {                      
                $campus_id = $row['campus_id'];
                $campus_name = $row['name'];                                                                        
                $campus_for_units[$campus_id] = $campus_name;
            }
        }
    echo json_encode($campus_for_units);
  }

  //Semester for selected unit and campus
  if(isset($_POST['unit_code_for_sem']) AND isset($_POST['campus_code_for_sem'])){
    $unit_code = $_POST['unit_code_for_sem'];
    $campus_code = $_POST['campus_code_for_sem'];
    $staff_for_units = array();  
    $query = "SELECT DISTINCT u.semester, s.name FROM ucs u, semester s where u.semester = s.id and u.unit_code='$unit_code' and u.campus_id='$campus_code'";
    $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {                      
                $semester_id = $row['semester'];
                $semester_name = $row['name'];                                                                        
                $sem_for_campus[$semester_id] = $semester_name;
            }
        }
    echo json_encode($sem_for_campus);
  }

  

  //appoint lecturer/tutor by uc
  if(isset($_POST['campus']) && isset($_POST['sem']) && isset($_POST['unit']) && isset($_POST['staff']) && isset($_POST['position'])){
      $campus = $_POST['campus'];
      $sem = $_POST['sem'];
      $unit_code = $_POST['unit'];
      $staff_id = $_POST['staff'];
      $position = $_POST['position'];

    //echo $campus." ".$sem." ".$unit_code." ".$staff_id. " ".$position;
    
    $query = "INSERT INTO `ucs` (`id`, `unit_code`, `campus_id`, `semester`, `timetable_id`, `staff_id`, `position`) VALUES (NULL, '$unit_code', '$campus', '$sem', NULL, '$staff_id', '$position');";
    if(mysqli_query($conn, $query)){
        echo "Successfully appointed as ". $position. " for ". $unit_code;
    }
    else{
        echo "Not successful";//$conn -> error;
    }
  }


  //load semster and campus with units
  function loadUnits(){
    include("db_connect.php");
    
    $load_unit_query = "SELECT * FROM unit";
    $result = mysqli_query($conn, $load_unit_query);
    while($row = mysqli_fetch_assoc($result)) {
        $unit=$row['code'];
        $load_avail_query = "SELECT DISTINCT uc.unit_code as unit_code, u.name as unit, c.name as campus, s.name as semester from ucs uc JOIN unit u JOIN campus c JOIN semester s where uc.unit_code=u.code AND uc.semester=s.id AND uc.campus_id=c.id AND uc.unit_code='$unit' ORDER BY campus";
        $result_avail = mysqli_query($conn, $load_avail_query);
            
        while($row_avail = mysqli_fetch_assoc($result_avail)) {
            
            
            echo '<li><b>'.$row_avail["campus"]."   -   </b>".$row_avail["semester"].'</li>';
            
        }
            
        
    }

}


  
                
                

?>