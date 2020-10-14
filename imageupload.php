<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../csss/productuploadimages.css">
    <title>image-uploads</title>
</head>
<body>
  <div class="container">
  <?php
session_start();
?>
<form action="phpFiles/imagefileupload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="image">
<button type="submit" name="upload">insert</button>
</form>
<?php

$_SESSION['user_name'];
 $_SESSION['user_email'];

?>

  </div>  
</body>
</html>