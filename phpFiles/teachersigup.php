<?php
if(isset($_POST["submit"])){
  session_start();
    include_once   "../include/connections.php"; 
    $userName=mysqli_real_escape_string($conn, $_POST["name"]);
      $userEmail=mysqli_real_escape_string($conn, $_POST["email"]); 
      $userPhone=mysqli_real_escape_string($conn, $_POST["phone"]);
      $userState=mysqli_real_escape_string($conn, $_POST["state"]);
      $userCity=mysqli_real_escape_string($conn, $_POST["city"]);
      $userSkill=mysqli_real_escape_string($conn, $_POST["skill"]);
      $userPass=mysqli_real_escape_string($conn, $_POST["password"]);
      $userPassConf=mysqli_real_escape_string($conn, $_POST["comfirm"]);

      if(empty($userName) || empty($userEmail) || empty($userPhone) 
      || empty($userState) || empty($userCity) || empty($userSkill) || empty($userPass) || empty($userPassConf)){
        header("Location: ../index.html?empty");
      }
    
    
    if($userPass != $userPassConf){
        header("Location: ../html/userSignup.php?passwordError");
        exit();   
    }

    $sql1="SELECT * from user_teacher where user_name='$userName' OR user_email='$userEmail'";

    $query=mysqli_query($conn, $sql1);
    $result=mysqli_num_rows($query);
    
    
     if($result > 0){
      header("Location: ../index.html?user-taken");
     }  

     else{
         $sql="INSERT INTO user_teacher (user_name, user_email,  user_skill, user_phone,
          user_state, user_city, user_password) VALUES('$userName','$userEmail','$userSkill','$userPhone', 
          '$userState','$userCity','$userPass');";
       mysqli_query($conn, $sql); 
        $_SESSION['user_name']=$userName;
        $_SESSION['user_email']=$userEmail;
   
        header("Location: ../upload.php?successful");

     }
        
   exit();
}else{
    header("Location: ../html/userSignup.php?error"); 
    exit();
}


