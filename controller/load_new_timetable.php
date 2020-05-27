<?php
 if(!isset($_SESSION)) 
 { 
     session_start();
     if(!isset($_SESSION['type']) || $_SESSION['type']!='student'){
       header("Location:/udw/index.php");
     }         
   
 } 
function load_timetable($unit_str){
    //echo "Got it :".$unit;
    include "db_connect.php";
    $str_arr=explode(".",$unit_str);
    $unit=$str_arr[0];
    $campus=$str_arr[1];
    $semester=$str_arr[2];
    //echo "Got it :".$unit.$campus.$semester;

    $sql = "select t.id as timetable_id,u.code as unit_code, u.name as unit_name, c.name as campus, s.name as semester,type, start_date, end_date,start_time, end_time, t.day as day from timetable t JOIN unit u JOIN campus c JOIN semester s WHERE t.unit=u.code AND t.campus=c.id AND t.semester=s.id AND t.unit='$unit' AND t.campus='$campus' AND t.semester='$semester'";
    $result = mysqli_query($conn, $sql);
    $values = array();
    while ($row = mysqli_fetch_array($result)){
        if($row['type'] == 'lecture'){
            echo '<tr><td><input type="radio" name="timetable_id_lec" value="'.$row['timetable_id'].'"></td><td>'.$row['unit_code'].'</td><td>'.$row['unit_name'].'</td><td>'.$row['campus'].'</td><td>'.$row['semester'].'</td><td>'.$row['type'].'</td><td>'.$row['start_date'].'</td><td>'.$row['end_date'].'</td><td>'.$row['start_time'].'</td><td>'.$row['end_time'].'</td><td>'.$row['day'].'</td></tr>';
            
        }
        else{
            echo '<tr><td><input type="radio" name="timetable_id_tut" value="'.$row['timetable_id'].'"></td><td>'.$row['unit_code'].'</td><td>'.$row['unit_name'].'</td><td>'.$row['campus'].'</td><td>'.$row['semester'].'</td><td>'.$row['type'].'</td><td>'.$row['start_date'].'</td><td>'.$row['end_date'].'</td><td>'.$row['start_time'].'</td><td>'.$row['end_time'].'</td><td>'.$row['day'].'</td></tr>';

        }
        
        
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

<?php
    if(isset($_POST['timetable_id_lec'])){
        $timetable_id=$_POST['timetable_id_lec'];
        $student_id=$_SESSION['user_id'];
        //echo $student_id.'a '.$timetable_id;
        $query = "INSERT INTO `timetable_map`(`timetable_id`, `student_id`) VALUES('$timetable_id','$student_id')";
        if(mysqli_query($conn, $query)){
            echo "Updated Successfully";          
        }
        else{
            echo "Something Wrong with update.";
        }
    }
    if(isset($_POST['timetable_id_tut'])){
        $timetable_id=$_POST['timetable_id_tut'];
        $student_id=$_SESSION['user_id'];
        //echo $student_id.'a '.$timetable_id;
        $query = "INSERT INTO `timetable_map`(`timetable_id`, `student_id`) VALUES('$timetable_id','$student_id')";
        if(mysqli_query($conn, $query)){
            echo "Updated Successfully";          
        }
        else{
            echo "Something Wrong with update.";
        }
    }
?>

<?php
    if(isset($_POST['unit_code'])){
        $unit=$_POST['unit_code'];
        load_timetable($unit);
    }
?>