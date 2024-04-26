<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        .profile-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-image img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        .info-section {
            margin-bottom: 30px;
        }
        .info-section h2 {
            margin-bottom: 10px;
        }
        .info-card {
            background-color: #f9f9f9;
            padding: 20px ;
            border-radius: 5px;
            margin-top: 20px;
        }
        .edit-btn {
            background-color: #4a90e2;
            color: #fff;
            padding: 10px 20px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <h1>Client Profile</h1>
</header>

<div class="container">
    <div class="profile-image">
        <img src="tree-736885_1280.jpg" alt="Profile Image">
    </div>

    <div class="info-section">
        <a href="edit_profile_front.php" class="edit-btn">Edit Personal Info</a>
        <div class="info-card">
            <?php
            session_start();
            ?>
            <p>Name: <?php echo $_SESSION["fname"]." ".$_SESSION["lname"]; ; ?></p>
            <p>Age: <?php echo $_SESSION["weight"]; ?></p>
            <p>Gender: <?php echo $_SESSION["gender"]; ?></p>
            <p>Email: <?php echo $_SESSION["email"]; ?></p>
            <p>Phone Number: +2<?php echo $_SESSION["phonenum"]; ?></p>
            <p>Weight: <?php echo $_SESSION["weight"]; ?> kg</p>
            <p>Height: <?php echo $_SESSION["height"]; ?> cm</p>
            <p>Waist Cercomfrance: <?php echo $_SESSION["waist_cer"]; ?></p>

        </div>
    </div>
</div>

</body>
</html>
