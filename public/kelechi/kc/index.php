<?php
/*
Using user login informatioon data stored within the session is applied using the link to this page.
*/
// session_start();
// include(''); // Include your database connection

// $username = $_POST['username']; // Username from the login form
// $password = $_POST['password']; // Password from the login form

// // Fetching user_id based on the provided username and password
// $query = "SELECT user_id FROM login_table WHERE username='$username' AND password='$password'";
// $result = mysqli_query($conn, $query);

// if (mysqli_num_rows($result) == 1) {
//     $row = mysqli_fetch_assoc($result);
//     $_SESSION['user_id'] = $row['user_id'];
//     header("Location: dashboard.php"); // Redirect to dashboard
// } else {
//     echo "Invalid login credentials.";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <style>
        body {
            background-color: whitesmoke;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            width: 70%;
            margin: 100px auto;
            background-color: #2c003e; /* Very dark shade of purple */
            padding: 20px;
        }

        .profile-picture {
            flex: 1;
            text-align: center;
            margin-top:50px;
        }

        .profile-picture img {
            width: 250px;
            height: 150px; 
            border-radius: 30%;
            border: 5px solid #fff;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5);
            transition: box-shadow 0.3s;
        }

        .profile-picture img:hover {
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 1);
        }

        .profile-picture button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #7d00d9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow:inset 3px -3px 10px  black;
            tansition:3ms ease-in;
        }
        .profile-picture button:active{
            box-shadow:none;
        }

        .profile-form {
            flex: 2;
            background-color: #e0e0e0; /* Light shade of gray */
            padding: 20px;
            border-radius: 20px;
            margin-left: 40px;
        }

        .profile-form input,
        .profile-form textarea {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
        }
        
        .profile-form button {
            padding: 10px 20px;
            background-color: #7d00d9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn{
            margin-left:20px;
        }
        .btn button[type="submit"]{
            margin-left:45%;
            
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="profile-picture">
            <img src="<?php echo $profile_picture; ?>" alt="Profile Picture">
            <button type="file" name="change" >Change Photo</button>
        </div>
        
        <div class="profile-form">

            <form action="update_profile.php" method="post">
            
            <input type="text" name="first_name" value="<?php echo $first_name; ?>" placeholder="First Name">
                <input type="text" name="last_name" value="<?php echo $last_name; ?>" placeholder="Last Name">
                <input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="Contact">
                <textarea name="bio" placeholder="Bio"><?php echo $bio; ?></textarea>
            <div class="btn">
                <button type="reset" onclick="resetForm()">Undo Changes</button>
                <button type="submit">Save</button>
                </div>
            
            
            </form>
        </div>
    </div>

    <script>
        function resetForm() {
            document.querySelector('form').reset();
        }

    document.querySelector('form').addEventListener('submit', function(e) {
    let phone = document.querySelector('input[name="phone"]').value;
    
    if (!phone.match(/^\d{13}$/)) {
        alert("Please enter a valid 13-digit phone number.");
        e.preventDefault();
    }
});


    </script>
</body>
</html>

