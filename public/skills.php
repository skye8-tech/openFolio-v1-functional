<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h3>Fetched skills</h3>
<body>
<div class="container skills col-md-12 mt-2  card p-5 bg-light">
    <h1>Skills</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-md  text-white p-2 text-center bgpurple-lighter">
                Skill 1
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-md  text-white p-2 text-center bgpurple-lighter">
                Skill 2            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-md  text-white p-2 text-center bgpurple-lighter">
                Skill 3
            </div>
        </div>


    </div>

    <!-- button to go to add skills -->

    <div class=" bgpurple text-white p-2 w-25 rounded mt-5 ">
       <button><a href="add.php" class="text-white" class="link" style="text-decoration: none;">Add Skill</a></button> 
    </div>
</div>
<?php
include '../config/config.php';

if ($conn -> connect_error) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

// Perform query
if ($result = $conn -> query("SELECT * FROM Skills")) {
     echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result = $conn -> store_result();
  
}
$conn -> close();
   
?>

</body>
</html>                