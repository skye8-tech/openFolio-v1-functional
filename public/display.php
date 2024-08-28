<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
</head>
<body>
      <button> <a href = " data.php">Add skill </a> </button> 
      <table border='1'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>description</th>
                <th>user_id</th>
</tr>
</thead>
<tbody>
    <?php 
    $sql = "SELECT * FROM skills";
     $result=mysqli_query($conn,$sql);
    if(mysqli_query($conn,$sql)){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $description = $row['description'];
            $user_id = $row['user_id'];
            echo '<tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$description.'</td>
                <td>'.$user_id.'</td>
               <td> <button class="btn btn-danger"><a onClick= \'javascript:return confirm("Are you sure you want to delete this?");
                \'href="delete.php? deleteid='.$id.'">Delete</a></button>   </td>
                </tr>';
        }
    }
    ?>
</tbody>
</body>
</html>