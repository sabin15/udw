<?php
function loadtable(){
    include "db_connect.php";    

    $sql = "SELECT st.name as staff_name, u.code as unit_code, u.name as unit_name, c.name as campus_name,c.id as campus_id, s.name as sem_name, s.id as sem_id, uc.position, st.id as staff_id from ucs uc JOIN unit u JOIN campus c JOIN semester s JOIN staff st where uc.unit_code=u.code AND uc.semester=s.id AND uc.campus_id=c.id AND uc.staff_id = st.id;";
    $result = mysqli_query($conn, $sql);
    $values = array();
    while ($row = mysqli_fetch_array($result)){
        
        echo '<tr><td>'.$row['staff_name'].'</td><td>'.$row['unit_code'].'</td><td>'.$row['unit_name'].'</td><td>'.$row['campus_name'].'</td><td>'.$row['sem_name'].'</td><td>'.$row['position'].'</td><td><a><span class="glyphicon glyphicon-edit" onclick="edit_staff_details(\''.$row['staff_id'].'\',\''.$row['staff_name'].'\',\''.$row['unit_code'].'\',\''.$row['campus_name'].'\',\''.$row['position'].'\')"></span></a>
        <a><span class="glyphicon glyphicon-trash" onclick="delete_staff(\''.$row['staff_id'].'\',\''.$row['sem_id'].'\',\''.$row['unit_code'].'\',\''.$row['campus_id'].'\',\''.$row['position'].'\')"></span></a></td></tr>';
    }

}

?>



<?php
    //Deleting staff details
    include "db_connect.php";
    if(isset($_POST['staffId']) && isset($_POST['position']) && isset($_POST['unit']) && isset($_POST['campus']) && isset($_POST['semester']) && isset($_POST['action']) && $_POST['action'] == 'delete'){
        $staff_id = $_POST['staffId'];
        $unit = $_POST['unit'];   
        $campus = $_POST['campus'];   
        $semester = $_POST['semester'];   
        $position = $_POST['position'];
        echo $staff_id.' '.$unit.' '.$campus.' '.$semester.' '.$position;
                
        $query = "delete from ucs where staff_id='$staff_id' AND unit_code='$unit' AND campus_id='$campus' AND semester='$semester' AND position='$position'";
        if(mysqli_query($conn, $query)){
            $qry= "UPDATE `appoint_staff` SET `unit_code` = NULL,`position` = 'staff' WHERE `staff_id` = '$staff_id';";
            if(mysqli_query($conn, $qry)){
                echo "Deleted Successfully";
            }
            
        }
        else{
            echo "Something Wrong with Deletion.";
        }
    }
    
?>

<?php
    //Updating staffs
    include "db_connect.php";  
    if(isset($_POST['staffId']) && isset($_POST['position']) && isset($_POST['unit']) && isset($_POST['campus']) && isset($_POST['semester']) && isset($_POST['action']) && $_POST['action'] == 'update'){
        $staff_id = $_POST['staffId'];
        $unit = $_POST['unit'];   
        $campus = $_POST['campus'];   
        $semester = $_POST['semester'];   
        $position = $_POST['position'];           
        $query = "UPDATE `ucs` SET `unit_code` = '$unit',`campus_id` = '$campus',`semester` = '$semester',`position` = '$position' WHERE `staff_id` = '$staff_id';";
        if(mysqli_query($conn, $query)){
            $qry= "UPDATE `appoint_staff` SET `unit_code` = '$unit',`position` = '$position' WHERE `staff_id` = '$staff_id';";
            if(mysqli_query($conn, $qry)){
                echo "Updated Successfully";
            }
            
        }
        else{
            echo "Something Wrong with update.";
        }
    }
    
?>