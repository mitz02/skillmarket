<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <title>edit-profile</title>
</head>
<body>
    <?php
    session_start();
    include_once   "include/connections.php"; 
    $userName =  $_SESSION['user_name'];
    $userPassword =  $_SESSION['userPassword'];
    $userEmail=  $_SESSION['user_email'];

    $sql = "SELECT * FROM uploads where user_name='$userName'";
    $query = mysqli_query($conn, $sql);
    $rsult = mysqli_num_rows($query);
    if($rsult > 0){
        
     while($row = mysqli_fetch_assoc($query)){
      $imagePath   = "uploads/".$row['image_name'];
      $imageRow = $row['image_name'];
      $form = '<form action="" method="post">
      <input type="hidden" value="'.$imageRow.'" name = "image">
      <button type="submit" name = "submit">Delete</button>
      </form>';
      echo '<div class="container">'.
      "<img src=".$imagePath.">".
      $form.
      '</div>';

     
     
      }
      if(isset($_POST['submit'])){
        $imagePost = $_POST['image'];
        
         $sqla = "DELETE  FROM uploads WHERE user_name = '$userName' AND image_name = '$imagePost'";
        mysqli_query($conn, $sqla);
     }
     echo '<a href="upload.php">upload Pictures</a>';   
    }else
      if($rsult  == 0){
        echo "you have No picture";
        echo '<a href="upload.php">upload Pictures</a>';
        exit(); 
    }
    
    else{
      header("Location: /login.php?error");
      exit();
    }
    
    ?>
</body>
</html>