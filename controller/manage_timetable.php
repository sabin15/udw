<?php
    include 'db_connect.php';
    

    $errors=array();

	if($_POST){
		$unit=mysqli_escape_string($conn, $_POST['unit']);
        $campus=mysqli_escape_string($conn, $_POST['campus']);
        $semester=mysqli_escape_string($conn,$_POST['semester']);
		$type=mysqli_escape_string($conn,$_POST['type']);
        $start_date=mysqli_escape_string($conn,$_POST['sem-start-date']);
        $end_date=mysqli_escape_string($conn,$_POST['sem-end-date']);
        $start_time=mysqli_escape_string($conn,$_POST['sem-start-time']);
        $end_time=mysqli_escape_string($conn,$_POST['sem-end-time']);
        $dayy=mysqli_escape_string($conn,$_POST['day1'].'.'.$_POST['day2'].'.'.$_POST['day3'].'.'.$_POST['day4'].'.'.$_POST['day5']);
        //echo $type.$sem_start_date.$sem_end_date.$sem_start_time.$sem_end_time.$day;
       
        //$sql="INSERT INTO timetable(unit, campus, semester, type, start_date, end_date, start_time, end_time, day) VALUES('$unit', '$campus', '$semester' ,'$type', '$sem_start_date', '$sem_end_date', '$sem_start_time', '$sem_end_time',  $day')";
        $sql="INSERT INTO timetable(unit, campus, semester, type, start_date, end_date, start_time, end_time, day) VALUES('$unit', '$campus', '$semester', '$type', '$start_date','$end_date','$start_time','$end_time', '$dayy')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo true;
        }
        else{
            echo "data cannot be inserted ".mysqli_error($conn);
            array_push($errors, "Server Error.");
        }
    }         
?>