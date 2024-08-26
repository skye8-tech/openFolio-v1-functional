<?php
include '../config/config.php';
session_start();
// $id=$_SESSION['user_id'];
$sql = "SELECT (`Title`, `date`, `organisation`, `description`, `image`)
WHERE id ='user_id'";


$result =mysqli_query($conn, $sql);
if($result){
    // echo "selected";
}else{
    die(mysqli_error($conn));
}
if(mysqli_num_rows($result)> 0){
    $row =mysqli_fetch_assoc($result);
}

// var_dump($row);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>certifications</title>
    <link rel="stylesheet" href="./css/display_certificate.css">
</head>
<body>
    <div class="container">
        <div class="certificates">
            <div class="img">
                <img src="./image/ER DIAGRAM (2).jpeg" alt="">
             </div>
             <div class="text">
                <p>title</p>
                <p>organisation</p>
                <p>Date</p>
                <div class="details">
                    <p class="explain">explain what the certificates entails..</p>
                </div>
             </div>
        </div>


        <div class="certificate">
            <div class="img">
                <img src="./image/ER DIAGRAM (2).jpeg" alt="">
             </div>
             <div class="text">
                <p>title</p>
                <p>organisation</p>
                <p>Date</p>
                <div class="details">
                    <p class="explain">explain what the certificates entails..</p>
                </div>
             </div>
        </div>
    </div>
</body>
</html>