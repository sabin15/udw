<?php
    include 'db_connect.php';
    

    $errors=array();

	if($_POST){
		$user_id=mysqli_escape_string($conn, $_POST['user_id']);
        $name=mysqli_escape_string($conn, $_POST['staff_name']);
        $email=mysqli_escape_string($conn,$_POST['staff_email']);
        $password=password_hash($_POST['staff_password'], PASSWORD_BCRYPT);
		$address=mysqli_escape_string($conn,$_POST['staff_address']);
        $contact=mysqli_escape_string($conn,$_POST['staff_contact']);
        $qualification=mysqli_escape_string($conn,$_POST['staff_qualification']);
        $expertise=mysqli_escape_string($conn,$_POST['staff_expertise']);
        $dob = mysqli_escape_string($conn,$_POST['staff-dob']);
        
                        
        $email_check_query = "SELECT * FROM staff WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $email_check_query);
        $user = mysqli_fetch_assoc($result);
                
        if ($user) { // if email exists
            array_push($errors, "Email already exists");
            echo "Email already exists";
        }else{
            $sql="INSERT INTO staff(staff_id,name, email, password, address, qualification, expertise, phone_number) VALUES('$user_id','$name', '$email', '$password' ,'$address', '$qualification', '$expertise', '$contact')";
            $result=mysqli_query($conn,$sql);
            if($result){
                $staff_id = mysqli_insert_id($conn);
                $query = "INSERT INTO `appoint_staff` (`id`, `unit_code`, `staff_id`, `position`) VALUES (NULL, NULL, '$staff_id', 'staff');";
                
                $result2=mysqli_query($conn,$query);
                
                if($result2){
                    echo true;
                }
                
                //echo "Added new user successfully";
                //header('location: /udw/login.php');
            }
            else{
                //array_push($errors, "Server Error.");
                echo "Something went wrong.";
            }
        }
    }       
?>