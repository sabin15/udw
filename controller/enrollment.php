<?php
if(!isset($_SESSION)) 
{ 
    session_start();
    if(!isset($_SESSION)) 
    { 
        session_start();
        if(!isset($_SESSION['type']) || $_SESSION['type']!='student'){
          header("Location:/udw/index.php");
        }         
      
    } 
}
include ('db_connect.php');
    
    function loadUnits(){
            include ('db_connect.php');
            $load_unit_query = "SELECT * FROM unit";
            $result = mysqli_query($conn, $load_unit_query);
            while($row = mysqli_fetch_assoc($result)) {
                $unit=$row['code'];
                $load_avail_query = "SELECT DISTINCT uc.unit_code as unit_code, u.name as unit, c.name as campus, s.name as semester from ucs uc JOIN unit u JOIN campus c JOIN semester s where uc.unit_code=u.code AND uc.semester=s.id AND uc.campus_id=c.id AND uc.unit_code='$unit' ORDER BY campus";
                $result_avail = mysqli_query($conn, $load_avail_query);           

                    echo '<div class="panel panel-default">';
                        echo '<div class="panel-heading">';
                            echo '<h4 class="panel-title">';
                                echo '<a data-toggle="collapse" data-parent="#accordion" href="#'.$row['code'].'">'.$row['code'].' '.$row['name'].'</a>';
                            echo '</h4>';
                        echo '</div>';
                        
                        echo '<div id="'.$row['code'].'" class="panel-collapse collapse">';
                            echo '<div class="panel-body">';
                                echo '<h3>Available Campus and Semester</h3>';
                                echo '<p><ol>';
                                while($row_avail = mysqli_fetch_assoc($result_avail)) {
                                    //echo '<option name="unit" value="'.$row["code"].'">'.$row["code"].' '.$row["name"].'</option>';

                                    echo '<li>'.$row_avail["campus"].'-'.$row_avail["semester"].'</li>';
                                    
                                }
                                echo '</ol>';
                                echo '<button class="btn btn-primary" onclick="enroll_form(\''.$unit.'\')">Enroll Now</button>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                
            }

    }
?>

<?php
    session_start();
    include ('db_connect.php');
    if(isset($_POST['enroll_campus']) && isset($_POST['enroll_sem']) && isset($_POST['enroll_unit']) && isset($_SESSION["user_id"]) ){
        $campus = $_POST['enroll_campus'];
        $sem = $_POST['enroll_sem'];
        $unit_code = $_POST['enroll_unit'];
        $student_id = $_SESSION['user_id'];
        //echo $campus.$sem.$unit_code.$student_id;
      //echo $campus." ".$sem." ".$unit_code." ".$staff_id. " ".$position;
      
      $query = "INSERT INTO enrollment (student, unit, campus, semester) VALUES ('$student_id', '$unit_code', '$campus', '$sem')";
      if(mysqli_query($conn, $query)){
          echo "true";
      }
      else{
          echo "Not successful".$conn -> error;
      }
    }
?>