<?php
include "db_connect.php";
    $student = $_POST['student_id'];

    $sql = "select u.code as unit_code, u.name as unit_name, c.name as campus, s.name as semester, type, start_date, end_date, start_time, end_time,day from timetable_map tm JOIN timetable t JOIN campus c JOIN semester s JOIN unit u where tm.timetable_id=t.id AND t.campus=c.id AND t.semester=s.id AND t.unit=u.code AND tm.student_id='$student'";

    $result = mysqli_query($conn, $sql);
    $values = array();
    while ($row = mysqli_fetch_array($result)){
        $values[] =  $row;
    }
    echo json_encode($values);

?>