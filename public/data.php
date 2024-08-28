<?php
include 'config.php';
if (isset($_POST['submit'])){

    $name = $_POST['skillname'];
    $description = $_POST['description'];
    $user_id= $_POST['user_id'];

    $sql="INSERT INTO skills (name, description, user_id)
    values('$name','$description','$skill_id')";
    if(mysqli_query($conn,$sql)){
      header("location:display.php"); 
    }
    else{
        die(mysqli_error($conn));
    }
   }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>

body{
    background-color: white;
    margin:100px;
    padding: 0px;
    display: block;
    justify-content:center;
    margin-left: 500px;
    align-items:center;
}
form{
    width: 300px;
    height: 300px;
    padding: 20px;
    background-color: skyblue;
    border-radius: 20px;
    margin-top:100px;
    z-index: 1;
    justify-content:center;


}
legend{
    text-align: center;
    font-size:30px;
    margin-bottom:  20px;
    letter-spacing: 0.5px;
}
label{
    display:block;
    margin-bottom:5px;
    margin-top:10px;
    font-size:18px;
}
input{
    width:280px;
    height:30px;
    border-radius:10px;
}
h3{
    font-size:20px;
}
select{
    margin-bottom: 10px;

}
input[type="submit"]{
    font-size:18px;
    margin-top: 40px;
    width : 100px;
    margin-left: 100px

}
input[type="submit"]:active{
    background-color:blue;
    color:white;
}
p{
    margin-top:20px;
    z-index: 2;
    font-size: 20px;
}


</style>
</head>
<body>
    <form  method = "post">
        <label for = "skillname" > Enter your skillname:</label>
        <input type = " text" id = "skillname" name = "skillname"> 
        <label for = "description" > Enter your description:</label>
        <input type = " description" id = "description" name = "description"> 
        <label for = "user_id" > Enter your user_id:</label>
        <input type = "user_id" id = "user_id" name = "user_id"> 
        <input type = "submit" name = "submit"  value= "Create">
    </form>

</body>
</html>