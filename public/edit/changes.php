<?php

$servername = "localhost";
$username = "editskills";
$password = "";
$dbname = "update";

// Create connection
$conn = new mysqli($servername,  $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);

}

// $query = "SELECT * FROM editskills";
// $res = mysqli_query($conn, $query);
// if($res) {
//   $row = mysqli_fetch_assoc($res);
//   $title = $row['title'];
//   $Proficiency  = $row['Proficiency '];
//   $level= $row['level'];
//   $description = $row['description'];

//   include('form.tpl');
// }

// $sql = "
// UPDATE editskills
// SET title =' $title', Proficiency = '$Proficiency', Level = '$level',description = '$despcription';";

// if( $_SERVER["REQUEST_METHODE"] == "POST"){
// if ($conn->query($sql) === TRUE) {
//     echo "record inserted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// header('location:upateskills.php');
// }