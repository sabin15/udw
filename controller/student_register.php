<?php
    include 'db_connect.php';
    

    $errors=array();

	if($_POST){
		$user_id=mysqli_escape_string($conn, $_POST['f_name']);
        $name=mysqli_escape_string($conn, $_POST['name']);
        $email=mysqli_escape_string($conn,$_POST['email']);
        $password=password_hash($_POST['password'], PASSWORD_BCRYPT);
		$address=mysqli_escape_string($conn,$_POST['address']);
        $contact=mysqli_escape_string($conn,$_POST['contact']);
        $qualification=mysqli_escape_string($conn,$_POST['qualification']);
        $expertise=mysqli_escape_string($conn,$_POST['expertise']);
        $type=mysqli_escape_string($conn,$_POST['type']);

        $email_check_query = "SELECT * FROM student WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $email_check_query);
        $user = mysqli_fetch_assoc($result);
                
        if ($user) { // if email exists
            array_push($errors, "Email already exists");
            echo "Email already exists";
        }
                    
                
        if (count($errors) == 0) {
            $sql="INSERT INTO student(name, email, password, address, phone_number) VALUES('$name', '$email', '$password' ,'$address', '$contact')";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo true;
                //echo "Added new user successfully";
                //header('location: /udw/login.php');
            }
            else{
                array_push($errors, "Server Error.");
            }
        }         
		
	}
	

?>