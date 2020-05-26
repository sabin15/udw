<?php
include "db_connect.php";
    $student = $_POST['student_id'];

    $sql = "select en.student as student,u.name as unit,c.name as campus, s.name as semester from enrollment en JOIN campus c JOIN semester s JOIN unit u where en.campus=c.id AND en.unit=u.code AND en.semester=s.id
     AND student='$student'";
    $result = mysqli_query($conn, $sql);
    $values = array();
    while ($row = mysqli_fetch_array($result)){
        $values[] =  $row;
    }
    echo json_encode($values);

?>