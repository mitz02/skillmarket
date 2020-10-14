<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/producthomeimages.css">
    <title>buy-product</title>
</head>
<body>
<div class="container">
<?php
include  'include/connections.php';
$sql  = "SELECT * FROM imageuploads";
$query  = mysqli_query($conn, $sql);
$result = mysqli_num_rows($query);
if($result > 1){
 while($row = mysqli_fetch_assoc($query)){
     $imageName =  "productuploads/".$row["image_name"];
     $image_name =  $row["image_name"];

     
     $imagePrice = $row["price"];
     $imageId = $row["image_id"];

     $form = '<form action="productinfo.php" method = "POST">
     <input type="hidden" name = "imageprice" value ="'.$imagePrice.'">
     <input type="hidden" name = "imagename" value ="'.$image_name.'">
     <input type="hidden" name = "imageid" value ="'.$imageId.'">
     
     <button type = "submit" name = "buy">Buy</button>
     </form>';


     echo '<div class="image">'.
        "<img src=".$imageName.">".
        '<p>Price: </p>'.
        '<h3>N '.$imagePrice.'</h3>'.
        '<p>Product Id : </p>'.
        '<h4>000'.$imageId.'</h4>'.
        $form.
      '</div>';
     
 }
}else{
    echo '<h2>We dont have prouct at the moment</h2>';
}


?>
</div>
</body>
</html>