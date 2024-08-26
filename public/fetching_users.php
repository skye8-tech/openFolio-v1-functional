
<!-- connecting to the data base -->
    <?php
include "../config/config.php";
    ?>
<?php
$sql = "SELECT id, username, email, full_name, address, bio, contact FROM users where id";
$result= mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="projectUploads/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container col-md-6 offset-md-3 shadow-md mt-5 p-5">
        <div class="row">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3">
                    <div class="bg-purple col-sm-4  rounded-lef">
                        <div class="card-block text-center text-white">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                            <div class="container">
                            <img
                            class="img rounded-circle img-fluid"
                            src="projectUploads/.png" onerror="this.src='projectUploads/defualt.png'" alt=""></div>
                            <h2 class="font-weight-bold mt-4"><?php echo $row['username']?></h2>
                            <p><?php echo $row['email']?></p>
                            <p><?php echo $row['contact']?></p>
                            <i class="far fa-edit fa-2x mb-4"></i>
                        </div>
                    </div>
                    <div class="bg-lightpurple col-sm-8 rounded-right">
                        <h3 class="mt-3 text-center">Informations</h3>
                        <hr class="badge-primary mt-0 w-">
                        <div class="row">
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Biography:</p>
                            <h6 class="text-muted"><?php echo $row['bio']?></h6>
                        </div>
                    </div>
                        <div class="row my-5">
                        <div class="col-sm-6">
                                <button class="text-white">Share</button>
                            </div>
                        <div class="col-sm-6">
                        <button class="text-white">Edit Profile</button>

                            </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</div>
</body>
</html>