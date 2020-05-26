<?php
function loadtable(){
    include "db_connect.php";    

    $sql = "SELECT st.name as staff_name, u.code as unit_code, u.name as unit_name, c.name as campus_name, s.name as sem_name, uc.position, st.id as staff_id from ucs uc JOIN unit u JOIN campus c JOIN semester s JOIN staff st where uc.unit_code=u.code AND uc.semester=s.id AND uc.campus_id=c.id AND uc.staff_id = st.id;";
    $result = mysqli_query($conn, $sql);
    $values = array();
    while ($row = mysqli_fetch_array($result)){
        
        echo '<tr><td>'.$row['staff_name'].'</td><td>'.$row['staff_name'].'</td><td>'.$row['unit_name'].'</td><td>'.$row['campus_name'].'</td><td>'.$row['sem_name'].'</td><td>'.$row['position'].'</td><td><a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details(\''.$row['staff_id'].'\')"></span></a>
        <a><span class="glyphicon glyphicon-trash" onclick=""></span></a></td></tr>';
    }

}
?>

<?php
    include "db_connect.php";  
    if(isset($_POST['staffId']) && isset($_POST['position'])){
        $staff_id = $_POST['staffId'];
        $position = $_POST['position'];    
        //echo $unit_selected . $max_staff;
        
        $query = "UPDATE `ucs` SET `position` = '$position' WHERE `staff_id` = '$staff_id';";
        if(mysqli_query($conn, $query)){
            echo "Updated Successfully";
        }
        else{
            echo "Something Wrong.";
        }
      }
      else{
          echo "no post";      }
    
?>