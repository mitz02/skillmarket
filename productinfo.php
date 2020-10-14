<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/productinfo.css">
    <title>buy-product</title>
</head>
<body>
    <div class="container">
    <?php

if(isset($_POST['buy'])){
    $productName = $_POST['imagename'];
    $productPrice = $_POST['imageprice'];
    $productId = $_POST['imageid'];
    $name = "productuploads/".$productName;

 $contact =  '<div class="contact">
 <h3>Contact Sellers</h3>
 <p>Call: <h4>080454545</h4></p>
 </div>';
    echo '<div class="image">
   <img src='.$name.'>
   <div class="wrapper">
   <p>Price:    &nbsp; &nbsp;<span>N'.$productPrice.'</span></p>'.
   '<p>productId:   &nbsp; &nbsp;'."000".$productId.'</p>'.
     $contact.
   '</div>
    </div>';
 
  
}else{
   header("Location:productimages.php");
}
?>
</div>
</body>
</html>