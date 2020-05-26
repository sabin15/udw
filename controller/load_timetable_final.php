<?php
include "db_connect.php";
    $student = $_POST['student_id'];

    $sql = "select DISTINCT en.student as student,u.name as unit,c.name as campus, s.name as semester,t.type,t.start_date,t.end_date,t.start_time,t.end_time,t.day from enrollment en JOIN campus c JOIN semester s JOIN unit u JOIN timetable t where t.unit=u.code AND t.semester=s.id AND t.campus=c.id 
     AND student='$student'";
    $result = mysqli_query($conn, $sql);
    $values = array();
    while ($row = mysqli_fetch_array($result)){
        $values[] =  $row;
    }
    echo json_encode($values);

?>