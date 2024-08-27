<?php
// Kowing that the user logs'-in, we automaticaly link to his session thus uptianing the user_id from it.
session_start();
require 'config.php'; 

// Fetch the user's data
$user_id = $_SESSION['user_id'];
$query = $pdo->prepare("SELECT first_name, last_name, bio, image, phone FROM users WHERE id = ?");
$query->execute([$user_id]);
$user = $query->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updatin_User_Profile_form</title>
</head>
<body>
    <CENTER>
    <div class="box">

    <h2>UPDATE YOUR PROFILE</h2>
    
<form action="update_profile.php" method="POST" enctype="multipart/form-data">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($user['first_name']); ?>" required>
    
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($user['last_name']); ?>" required>
    
    <label for="bio">Bio:</label>
    <textarea id="bio" name="bio"><?= htmlspecialchars($user['bio']); ?></textarea>
    
    <label for="image">Profile Image:</label>
    <input type="file" id="image" name="image">
    <?php if ($user['image']): ?>
        <img src="uploads/<?= htmlspecialchars($user['image']); ?>" alt="Profile Image" width="100">
    <?php endif; ?>
    
    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($user['phone']); ?>" maxlength="13" required>
    
    <button type="submit" name="update_profile">Update Profile</button>
</form>

</div>

</CENTER>

</body>
</html>