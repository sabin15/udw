<?php
function loadtable(){
    include "db_connect.php";    

    $sql = "select st.student_id as student_id, st.name as student_name, st.email as email, u.name as unit, u.code as unit_code, c.id as campus_id, c.name as campus, se.id as sem_id, se.name as semester 
    from enrollment en  JOIN unit u JOIN campus c JOIN semester se JOIN student st WHERE en.student=st.student_id AND en.unit=u.code AND en.campus = c.id AND en.semester = se.id;";
    $result = mysqli_query($conn, $sql);
    $values = array();
    while ($row = mysqli_fetch_array($result)){
        
        echo '<tr><td>'.$row['student_id'].
            '</td><td>'.$row['student_name'].
            '</td><td>'.$row['email'].
            '</td><td>'.$row['unit'].
            '</td><td>'.$row['unit_code'].
            '</td><td>'.$row['campus'].
            '</td><td>'.$row['semester'].            
            '</td><td><a><span class="glyphicon glyphicon-edit" onclick="edit_student_details(\''.$row['student_id'].'\',\''.$row['student_name'].'\',\''.$row['email'].'\',\''.$row['unit'].'\',\''.$row['unit_code'].'\',\''.$row['campus'].'\',\''.$row['semester'].'\')"></span></a>
        <a><span class="glyphicon glyphicon-trash" onclick="delete_student(\''.$row['student_id'].'\',\''.$row['unit_code'].'\',\''.$row['campus_id'].'\',\''.$row['sem_id'].'\')"></span></a></td></tr>';
    }

}

?>



<?php
    //Deleting staff details
    include "db_connect.php";
    if(isset($_POST['studentId']) && isset($_POST['unit']) && isset($_POST['campus']) && isset($_POST['semester'])  && isset($_POST['action']) && $_POST['action'] == 'delete'){
        $studentId = $_POST['studentId'];
        $unit = $_POST['unit'];   
        $campus = $_POST['campus'];   
        $semester = $_POST['semester'];           
        echo $studentId.' '.$unit.' '.$campus.' '.$semester;
                
        $query = "delete from enrollment where student='$studentId' AND unit='$unit' AND campus='$campus' AND semester='$semester'";
        if(mysqli_query($conn, $query)){
            echo "Deleted Successfully";
                        
        }
        else{
            echo "Something Wrong with Deletion.";
        }
    }
    
?>

<?php
    //Updating staffs
    include "db_connect.php";  
    if(isset($_POST['student_id']) && isset($_POST['unit']) && isset($_POST['campus']) && isset($_POST['semester']) && isset($_POST['action']) && $_POST['action'] == 'update'){
        $student_id = $_POST['student_id'];
        $unit = $_POST['unit'];   
        $campus = $_POST['campus'];   
        $semester = $_POST['semester'];           
        $query = "UPDATE `enrollment` SET `unit` = '$unit',`campus` = '$campus',`semester` = '$semester' WHERE `student` = '$student_id';";
        if(mysqli_query($conn, $query)){
            echo "Updated Successfully";           
            
        }
        else{
            echo "Something Wrong with update.";
        }
    }
    
?>