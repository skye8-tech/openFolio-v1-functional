
<?php
include '../config/config.php';
session_start();

//$user_id =$_SESSION['user_id'];

  if($conn -> connect_error){
    die ('connection failed:' . $conn->connect_error);
  }
//fetching data fron the database
$query = "SELECT * FROM skills where user_id = 1";
$result =mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
 echo $row['name'];
 echo $row['proficiencyLevel'];
 echo $row['description'];
 
   }
}else{
echo "No data skill found on the skill table";
}
$conn->close();
  // }
?>

</body>
</html>                