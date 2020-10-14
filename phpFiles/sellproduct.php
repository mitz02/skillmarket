<?php
session_start();
if(isset($_POST["submit"])){
    include_once   "../include/connections.php"; 
    $userName=mysqli_real_escape_string($conn, $_POST["name"]);
      $userEmail=mysqli_real_escape_string($conn, $_POST["email"]);
     
      $userState=mysqli_real_escape_string($conn, $_POST["state"]);
      $userTown=mysqli_real_escape_string($conn, $_POST["town"]);
      $userPass=mysqli_real_escape_string($conn, $_POST["password"]);
      $userPassConf=mysqli_real_escape_string($conn, $_POST["comfirm"]);

      if(empty($userName)|| empty($userEmail)|| empty($userPass)|| empty($userPassConf)||
      empty($userTown)|| empty($userState)){
        header("Location:../sellproductform.php?empty");
        exit(); 
      }


      if($userPass != $userPassConf){
        header("Location: ../html/userSignup.php?passwordError");
        exit(); 
    }   

    $sql="SELECT * from product where user_name='$userName' OR user_email='$userEmail'";
    $query=mysqli_query($conn, $sql);
  $result=mysqli_num_rows($query);
  if($result > 0){
      header("Location: ../index.html?user-taken");
     } else {
        $sqlr="INSERT INTO product (user_name, user_email, user_state,
        user_town, user_password) VALUES('$userName','$userEmail','$userState','$userTown','$userPass');";
     mysqli_query($conn, $sqlr);  
     $_SESSION['user_name'] = $userName;
      $_SESSION['user_email'] = $userEmail;
     header("Location:productuploadimages.php?account-created");
     exit();
     }
}else{
    header("Location:../sellproductform.php?fail");
    exit();
}