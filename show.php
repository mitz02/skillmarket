<?php
session_start();

include "include/connections.php";

$sql1="SELECT * from uploads";

$query=mysqli_query($conn, $sql1);
$result=mysqli_num_rows($query);
 if($result > 0){
    while($row = mysqli_fetch_assoc($query)){
       echo $row['image_name'];
    }
 }  