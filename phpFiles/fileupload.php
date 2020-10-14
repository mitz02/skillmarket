    <?php
    session_start();
    include_once "../include/connections.php";

    $userName =  $_SESSION['user_name'];
    $userEmail=$_SESSION['user_email'];
    if(isset($_POST["upload"])){
    $target = "../uploads/".basename($_FILES["image"]["name"]);
    $image = $_FILES["image"]["name"];

    $sql = "INSERT INTO uploads (user_name, user_email, image_name) VALUES('$userName','$userEmail','$image')";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        echo "image uploaded successfully...";
    }else{
        echo "there was a problem uploading the file";
    }
    }
    ?>