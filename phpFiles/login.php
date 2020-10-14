<?php
session_start();
if(isset($_POST["submit"])){
    include_once   "../include/connections.php"; 
    $userName=mysqli_real_escape_string($conn, $_POST["name"]);
    $userPass=mysqli_real_escape_string($conn, $_POST["password"]);
    $userEmail=mysqli_real_escape_string($conn, $_POST["email"]);
    if(empty($userName) || empty($userPass) || empty($userEmail)){
        header("Location: ../login.php?empty");   
        exit(); 
    }else{
      $sql = "SELECT * FROM user_teacher where user_name='$userName'
       AND user_password='$userPass' AND user_email = '$userEmail'";
      $query = mysqli_query($conn, $sql);
      $rsult = mysqli_num_rows($query);
      if($rsult > 0){
          
        $_SESSION['user_name'] = $userName;
        $_SESSION['userPassword'] = $userPass;
        $_SESSION['user_email'] = $userEmail;

         header("Location: ../edit.php");
        exit();  
      }else{
        header("Location: ../login.php?error");
        exit();
      }
    }
}else{
    header("Location: ../login.php?error");
   exit();
}