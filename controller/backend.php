<?php 
require_once("db_connect.php");

if(isset($_POST['unit_code']) && isset($_POST['unit_name']) && isset($_POST['unit_description'])){
    $unit_code = $_POST['unit_code'];
    $unit_name = $_POST['unit_name'];
    $unit_description = $_POST['unit_description'];
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
        echo "Successfully Appointed as ".$position."  for ". $unit_selected. " unit";
    }
    else{
        echo "Not successful";
    }
  }

?>