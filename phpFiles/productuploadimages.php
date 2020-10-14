<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/productuploadimages.css">
    <title>image-upload</title>
</head>
<body>
<h3>Upload Image of product</h3>
    <div class="container">

<form action="productfileupload.php" method="POST" enctype="multipart/form-data">
<label for="#">Choose Image</label>
<input type="file" name="image">
<label >Product price</label>
<input type="text" name="price">
<button type="submit" name="upload">insert</button>
</form>
</div>
</body>
</html>
