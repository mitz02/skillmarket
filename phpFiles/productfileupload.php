    <?php
    session_start();
    include_once "../include/connections.php";

    $userName =  $_SESSION['user_name'];
    $userEmail=$_SESSION['user_email'];
    if(isset($_POST["upload"])){
    $price = $_POST['price'];
  
    if(empty($price)){
        header("Location: uploadimages.php?no-price");
        exit();
    }
    $target = "../productuploads/".basename($_FILES["image"]["name"]);
    $image = $_FILES["image"]["name"];

    $sql = "INSERT INTO imageuploads (user_name, user_email, image_name, price) VALUES('$userName','$userEmail','$image', $price)";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header("Location:productuploadimages.php?sucessfull..");
    }else{
        echo "there was a problem uploading the file";
    }
    }
    ?>