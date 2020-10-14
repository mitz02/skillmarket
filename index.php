<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
          width: 100%;
          height: 80%;
        }
        </style>
    <title>skill market</title>
</head>
<body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand"  href="#">Skill & proDuct MArket</a>
          
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" style="margin-left: 10px;" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav"  style="margin: 0 auto; padding: 5px 0">
                <li class="nav-item">
                  <a class="nav-link" href="index.php" id="home" style = "font-size:20px">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="form/studentform.php"  id="student">Student Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="form/teacherform.php" id="teacher">Teacher Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sellproductform.php" id="teacher" >Sell products</a>
                </li>
              </ul>
              
            </div>
          </nav>

    <div class="wrapper">
        <div class="section">
            <div class="form">
                <form action="#">
                    <div class="search">
                    <input type="text" placeholder="search...">
                    <button>Go</button>
                    </div>
                </form>
            </div>
    
            <h2>Welcome to skill MArket</h2>
            <p>Create account to register you skills if you are a teacher or <br>
                Create Account to find a good teacher for any skill you want to learn.</p>

            <h4><a href="login.php">login</a></h4>
        </div>
        <!----section end -->
    </div>      
    
      
  

 
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
       
        $sql1 = "SELECT * FROM uploads where  user_name = '$user_name' AND user_email = '$user_email' LIMIT 1";

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
<div class="view-more">
<a href="home.php" style="color:darkblue">View More Skills</a></div>



<div class="section2">
 <div class="img">
   <img src="img/ankara2.JPG" alt="">
 </div>

 <div class="img">
   <img src="img/ankara.JPG" alt="">
 </div>

 <div class="img">
   <img src="img/material2.JPG" alt="">
 </div>

 <div class="img">
   <img src="img/ankara3.JPG" alt="">
 </div>
 <div class="img">
   <img src="img/material1.JPG" alt="">
 </div>
 <div class="img">
   <img src="img/ankara4.JPG" alt="">
 </div>


 <div class="img">
   <img src="img/material3.JPG" alt="">
 </div>

 <div class="img">
   <img src="img/ankara4.JPG" alt="">
 </div>

 <div class="img">
   <img src="img/ankara5.JPG" alt="">
 </div>
</div>

</div>
<div class="view-more">
<a href="producthomeimages.php" style="color:darkblue">View More products</a></div>


  
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>