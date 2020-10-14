<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product-edit</title>
    <link rel="stylesheet" href="css/product-edit.css">
</head>
<body>
    <div class="container">
    <?php
    session_start();
if(isset($_POST['submit'])){
    include 'include/connections.php';
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['email'];
 

   if(empty($email) || empty($name)  || empty($password)) {
       header("Location: productedit-login.php?empty");
       exit();
   }

   $sql = "SELECT * FROM product WHERE user_name ='$name' AND user_email = '$email'AND  user_password = '$password'";
   $query  = mysqli_query($conn, $sql);
   $result = mysqli_num_rows($query);
   if($result > 0){

    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
     $sqlr = "SELECT * FROM imageuploads WHERE user_name = '$name' AND user_email = '$email'";
     $imageQuery = mysqli_query($conn, $sqlr);
    $imageResult= mysqli_num_rows($imageQuery);
    if($imageResult > 0){
      while($imageRow = mysqli_fetch_assoc($imageQuery)){
        $imageName = $imageRow['image_name'];
        $form  = '<form action="product-delete.php" method ="POST">
        <input type="hidden" name = "image_name" value='.$imageName.'>
        <input type="hidden" name = "user_name" value = '.$name.'>
        <input type="hidden" name = "user_email" value = '.$email.'>
        <button type="submit" name = "delete">Delete</button>
        </form>';
          $imagePath = "productuploads/".$imageRow['image_name'];
         echo  '<div class="image">
          <img src='.$imagePath.'>'
          .$form.'
          </div>';
         
      }

      echo '<div class="addproduct"><a href="phpFiles/productuploadimages.php">Add Product</a></div>';
    }else {
        echo '<h2>No Product</h2>';
       echo '<div class="addproduct"><a href="phpFiles/productuploadimages.php">Add Product</a></div>';
    }
   }else{
    header("Location: productedit-login.php?No-user");
    exit();
   }
}

?>
    </div>
</body>
</html>