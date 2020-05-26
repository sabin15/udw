<?php
include "db_connect.php";
    $sql = "select st.student_id as student_id, st.name as student_name, st.email as email, u.name as unit from enrollment en JOIN student st JOIN unit u WHERE en.student=st.student_id AND en.unit=u.code";
    $result = mysqli_query($conn, $sql);
    $values = array();
    while ($row = mysqli_fetch_array($result)){
        $values[] =  $row;
    }
    echo json_encode($values);

?>