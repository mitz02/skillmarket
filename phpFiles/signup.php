<?php
if(isset($_POST["submit"])){
    include_once   "../include/connections.php"; 
    $userName=mysqli_real_escape_string($conn, $_POST["name"]);
      $userEmail=mysqli_real_escape_string($conn, $_POST["email"]);
      $userPhone=mysqli_real_escape_string($conn, $_POST["phone"]);
      $userState=mysqli_real_escape_string($conn, $_POST["state"]);
      $userCity=mysqli_real_escape_string($conn, $_POST["city"]);
      $userLearn=mysqli_real_escape_string($conn, $_POST["learn"]);
      $userPass=mysqli_real_escape_string($conn, $_POST["password"]);
      $userPassConf=mysqli_real_escape_string($conn, $_POST["comfirm"]);

    if(empty($userName)|| empty($userEmail)|| empty($userPass)|| empty($userPassConf)||
     empty($userCity)|| empty($userState)|| empty($userLearn) || empty($userPhone)){
       
        header("Location: ../index.html?fail");
    } 
    
    
    if($userPass != $userPassConf){
        header("Location: ../html/userSignup.php?passwordError");
        exit();   
    }

    $sql1="SELECT * from user_student where user_name='$userName' OR user_email='$userEmail'";

    $query=mysqli_query($conn, $sql1);
    $result=mysqli_num_rows($query);

     if($result > 0){
      header("Location: ../index.html?user-taken");
     }  

     if($userPhone < 11){
      header("Location: ../index.html?invalid-phoneNumber");
     }
     else{
         $sql="INSERT INTO user_student (user_name, user_email, user_password, user_phone,
          user_state, user_city, user_learn) VALUES('$userName','$userEmail','$userPass','$userPhone','$userState','$userCity','$userLearn');";
       mysqli_query($conn, $sql);  
       header("Location: ../index.html?successful");

     }
        
   exit();
}else{
    header("Location: ../html/userSignup.php?error"); 
    exit();
}


