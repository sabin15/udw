<?php
include "db_connect.php";
    $type = $_POST['type'];
    $unit = $_POST['unit'];
    $campus = $_POST['campus'];
    $semester = $_POST['semester'];

    $sql = "SELECT * FROM timetable where type='$type' AND unit='$unit' AND campus='$campus' AND semester='$semester'";
    $result = mysqli_query($conn, $sql);
    $values = array();
    while ($row = mysqli_fetch_array($result)){
        $values[] =  $row;
    }
    echo json_encode($values);

?>