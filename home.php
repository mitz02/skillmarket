<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
    <?php
      include "include/connections.php";

      $sql = "SELECT * FROM user_teacher";

      $query = mysqli_query($conn, $sql);
      $result  = mysqli_num_rows($query);
      if($result > 0){
        while($row = mysqli_fetch_assoc($query)){
        $user_email = $row['user_email'];
       $user_name = $row['user_name'];
       $user_skill = $row['user_skill'];
         
          $sql1 = "SELECT * FROM uploads where  user_name = '$user_name' AND user_email = '$user_email'";

          $query1 = mysqli_query($conn, $sql1);
      $result1  = mysqli_num_rows($query1);
      if($result1 > 0){
        while($row1 = mysqli_fetch_assoc($query1)){
          $imageName = $row1['image_name'];
          if($row1['image_name'] != ""){
             
        
 
            $form = '
            <form action="phpFiles/more.php" method="POST">'
            .'<input type="hidden" name="username" value ='.$user_name.'>'
            .'<input type="hidden" name="useremail" value ='.$user_email.'>'.
            '<button type="submit" name ="submit">More</button>'.
            '</form>';

            $fullImage = "uploads/".$imageName;
             echo '<div class="img">'.
             "<img src=".$fullImage.">"."<p>".$user_name."<h3>".$user_skill."</h3>"."</p>".$form.
             '</div>';
          }
          
        }
      }
    }
  }
  
    ?>
   
      
    </div>

    

    
</body>
</html>