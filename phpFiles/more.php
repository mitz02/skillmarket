<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/more.css">
</head>
<body>

<div class="container">
<?php

if(isset($_POST['submit'])){

    include_once   "../include/connections.php"; 
    $userName=$_POST["username"];
     $userEmail=$_POST["useremail"]; 
    


     $sq = "SELECT * FROM user_teacher where  user_name = '$userName' AND user_email = '$userEmail'";

$quer = mysqli_query($conn, $sq);
$rest  = mysqli_num_rows($quer);
if($rest > 0){
while($imagerow = mysqli_fetch_assoc($quer)){
    echo '<div class="container">'.
    '<div class="name">
       <h2>'.$imagerow["user_name"].'</h2>
       <h4>'.$imagerow["user_skill"].'</h4>
        </div>'.
    '</div>';

} 
$sqr = "SELECT image_name FROM uploads where  user_name = '$userName' AND user_email = '$userEmail'";
$imgQuery = mysqli_query($conn, $sqr);
$imgResult = mysqli_num_rows($imgQuery);
if($imgResult > 0){  
    while ($imgRow = mysqli_fetch_assoc($imgQuery)){
    
    $imgages = "../uploads/".$imgRow["image_name"];

    echo '<div class=image >'.
    '<img src='.$imgages.' >'.
    '</div>';
  
    }
}
}else{
    echo "no rows";
}
     
} 

?>

</div>
</body>
</html>





