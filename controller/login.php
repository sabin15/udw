<?php
    include ('db_connect.php');
    if($_POST){
		
      
      $email=mysqli_escape_string($conn,$_POST['email']);
      $password=mysqli_escape_string($conn,$_POST['password']);
      $type=mysqli_escape_string($conn,$_POST['type']);
      $user_check_query='';
      
      if($type=='student'){
        $user_check_query = "SELECT * FROM student WHERE email='$email'  LIMIT 1";
      }
      else
      {
        $user_check_query = "SELECT * FROM staff WHERE email='$email'  LIMIT 1";

      } 

      $result = mysqli_query($conn, $user_check_query);
      $user = mysqli_fetch_assoc($result);

      if ($user) { // if user exists
          if ($user['email'] === $email) {
              $auth=password_verify($password, $user['password']);
              if ($auth) {
                  session_start();
                  $_SESSION['username'] = $user['name'];
                  $_SESSION['logged'] = true;
                  $_SESSION['type']=$type;
                  echo true;
                  //header("Location:/udw/index.php");
                    
              } else {
                  echo false;
              }
          }
      }
      else
          echo 'User Doesnot exists';
  
}
