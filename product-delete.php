<?php
if(isset($_POST['delete'])){
    include 'include/connections.php';
    $userName = $_POST['user_name'];
    $userEmail = $_POST['user_email'];
    $imageName= $_POST['image_name'];

    $sql = "DELETE  FROM imageuploads WHERE user_name = '$userName' AND user_email = '$userEmail' AND image_name = '$imageName'";
    mysqli_query($conn, $sql);
    header("Location:product-edit.php");
}
    
 