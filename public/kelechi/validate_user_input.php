<?php
session_start();
include "uptian_session.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize input
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $bio = htmlspecialchars(trim($_POST['bio']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    
    // Validate phone number length
    if (strlen($phone) > 13) {
        die("Phone number must not exceed 13 characters.");
    }
    
    // Handle image upload
    $image = $user['image']; // Defualt image is set to the prevoius image that the user had.
    if ($_FILES['image']['size'] > 0) {
        $image_file = $_FILES['image'];
        
        // Check image size (1MB = 1,048,576 bytes)
        if ($image_file['size'] > 1048576) {
            die("Image size must not exceed 1MB.");
        }
        
        // Move the uploaded file to a directory
        $image = basename($image_file['name']);
        move_uploaded_file($image_file['tmp_name'], "uploads/$image");
    }
    
    // Update user data in the database
    $query = $pdo->prepare("UPDATE users SET first_name = ?, last_name = ?, bio = ?, image = ?, phone = ? WHERE id = ?");
    $query->execute([$first_name, $last_name, $bio, $image, $phone, $user_id]);
    
    echo "Profile updated successfully!";
}
?>
