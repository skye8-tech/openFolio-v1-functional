<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registration</h1>
    <form action="register.php" method="post"  
 enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" 
         required>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" 
         required>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password"  
        required>
        <?php 
            if(isset($_SESSION['passwordLower'])){
                echo $_SESSION['passwordLower'];
            }
            if(isset($_SESSION['passwordUpper'])){
                echo $_SESSION['passwordUpper'];
            }
            if(isset($_SESSION['passwordNumber'])){
                echo $_SESSION['passwordNumber'];
            }
        ?>   
        <label for="confirmpassword">Confirm Password:</label>
        <input type="text" id="confirmpassword" name="confirmpassword"  
        required>
        <label for="profilepicture">Profile Picture:</label>
        <input type="file" id="profilepicture" name="profilepicture" 
 required>
        <span id="usernameError" class="error"></span> 


        <button type="submit">Register</button>
    </form>
    <?php
 
//validation of the inputs and filteration of the input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING,20);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password']; 

    $confirmPassword 
 = $_POST['confirmPassword'];
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING, 20);
    $profilePicture = $_FILES['profilePicture'];

    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    }
    if (strlen($password) < 8) {
        $_SESSION["length"] == " Password can not be less than 8 characters";
        
        $hasLowerCase = false;
        $hasNumber = false;
        $hasUpperCase = false;
    
        for($count=0; $count < strlen($password); $count++){
            if(ctype_lower($password[$count])){
                $hasLowerCase = true;
            }
            if(ctype_upper($password[$count])){
                $hasUpperCase = true;
            }
            if(ctype_digit($password[$count])){
                $hasNumber = true;
            }
        }
        
        if(!$hasLowerCase){
            $_SESSION["passwordLower"] = "Password must have at least 3 lowercase";
        }
    
        if(!$hasNumber){
            $_SESSION["passwordNumber"] = "Password must have at least 1 number";
        }
    
        if(!$hasUpperCase){
            $_SESSION["passwordUpper"] = "Password must have at least 2 uppercase";
        }
    }
    if ($password !== $confirmPassword) {
        echo "Invalid password,Password must be equal to confirm password";
        echo " Confirm password";
    }
    //checking duplication in the database
    function checkDuplicate($conn, $field, $value) {
        $count = 0;
        $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE $field = ?");
        $stmt->bind_param("s", $value);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
        return $count > 0;
    }
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    if (checkDuplicate($conn, 'username', $username)) {
        echo "Username already exists";
    } elseif (checkDuplicate($conn, 'email', $email)) {
        echo "Email already exists";
    } else {
    }
    //implementing the hashed password function
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

$max_size = 2097152; // 2 MB
//checking the validation of the profile picture
if (!empty($_FILES['profilePicture']['name'])) {
    $file_name = $_FILES['profilePicture']['name'];
    $file_tmp_name = $_FILES['profilePicture']['tmp_name'];
    $file_size = $_FILES['profilePicture']['size'];
    $file_type = $_FILES['profilePicture']['type'];

    if (!in_array($file_type, $allowed_types)) {
        echo "Invalid file type. Only JPG, PNG, and GIF images are allowed.";
        exit;
    }
    if ($file_size > $max_size) {
        echo "File size exceeds the maximum limit of 2 MB.";
        exit;
    }

    $upload_dir = 'uploads/'; 
    $target_file = $upload_dir . basename($file_name);
    if (move_uploaded_file($file_tmp_name, $target_file)) {
        echo "File uploaded successfully";
    } else {
        echo "Error uploading file.";
    }
}
    // Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, name, profile_picture) VALUES (?, ?, ?, ?, ?)");
    //redirecting to a page
header('locaton:register.php');
}

$conn->close();
?>
    <script src="script.js"></script>
</body>
</html>