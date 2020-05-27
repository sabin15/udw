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
        $value = "";
        if(isset($_POST['day1'])){
            $day1 = $_POST['day1'];
            $value=$value."('".$unit."', '".$campus."', '".$semester."', '".$type."', '".$start_date."','".$end_date."','".$start_time."','".$end_time."', '".$day1."'),";
        }
        if(isset($_POST['day2'])){
            $day2 = $_POST['day2'];
            $value=$value."('".$unit."', '".$campus."', '".$semester."', '".$type."', '".$start_date."','".$end_date."','".$start_time."','".$end_time."', '".$day2."'),";
        }
        if(isset($_POST['day3'])){
            $day3 = $_POST['day3'];
            $value=$value."('".$unit."', '".$campus."', '".$semester."', '".$type."', '".$start_date."','".$end_date."','".$start_time."','".$end_time."', '".$day3."'),";
        }
        if(isset($_POST['day4'])){
            $day4 = $_POST['day4'];
            $value=$value."('".$unit."', '".$campus."', '".$semester."', '".$type."', '".$start_date."','".$end_date."','".$start_time."','".$end_time."', '".$day4."'),";
        }
        if(isset($_POST['day5'])){
            $day5 =$_POST['day5'];
            $value=$value."('".$unit."', '".$campus."', '".$semester."', '".$type."', '".$start_date."','".$end_date."','".$start_time."','".$end_time."', '".$day5."'),";
        }

        $value = substr_replace($value ,"",-1);



        $sql="INSERT INTO timetable(unit, campus, semester, type, start_date, end_date, start_time, end_time, day) VALUES ".$value;
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