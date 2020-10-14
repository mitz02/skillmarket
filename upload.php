<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/productuploadimages.css">
    <title>upload-product</title>
</head>
<body>
<h3>Upload images</h3>
    <div class="container">
       
    <form action="phpFiles/fileupload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="image">
<button type="submit" name="upload">insert</button>
</form>
<?php
session_start();
$_SESSION['user_name'];
$_SESSION['user_email'];


?>
    </div>
</body>
</html>