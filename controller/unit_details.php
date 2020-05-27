<?php
require_once("db_connect.php");
//unit details
if(isset($_POST['unit_code']) && isset($_POST['action']) && $_POST['action']=="enroll"){
    $unit_code = $_POST['unit_code'];    
    $query = "select u.code, u.description, u.name, uc.staff_id, s.name as staff_name from unit u, ucs uc, staff s where uc.unit_code = u.code and uc.staff_id = s.id and uc.position = 'lecturer' and u.code='$unit_code'";
    $unit_all = array();  
    $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
         // output data of each row
            while($row = $result->fetch_assoc()) {
                $unit_code = $row['code'];
                $unit_name = $row['name'];
                $description = $row['description'];
                $staff = $row['staff_name'];
                $unit_all = array($unit_code, $unit_name, $description,$staff);
            }
        }
    echo json_encode($unit_all);
  }
  ?>