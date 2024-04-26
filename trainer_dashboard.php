<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            color: #333;
        }
        .profile-info {
            margin-bottom: 20px;
        }
        .profile-info label {
            font-weight: bold;
        }
        .profile-info p {
            margin: 5px 0;
        }
        .action-buttons {
            text-align: center;
        }
        .action-buttons button {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }
        .action-buttons button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Trainer Dashboard</h1>
</div>
<?php
if(!isset($_SESSION)){
session_start();
}
?>

<div class="container">
    <h3 style="color: green"><?php if(isset($message))echo $message?></h3>
    <h2>Profile Information</h2>

    <div class="profile-info">
        <label>Name:</label>
        <p><?php echo $_SESSION["fname"].' '.$_SESSION["lname"]?></p>
        <label>Email:</label>
        <p><?php echo $_SESSION["email"]?></p>
        <label>Specialization:</label>
        <p><?php echo $_SESSION["specialization"]?></p>
        <label>Experience:</label>
        <p><?php echo $_SESSION["experience"]?></p>
    </div>
    <div class="action-buttons">
        <button>Edit Profile</button>
        <a href="trainer's_clients.php"><button>View Clients</button></a>
        <a href="meal_front.php"><button>Add meal</button></a>
        <a href="exercise_front.php"><button>Add Exercise</button></a>
        <a href="create_workoutlog.php"><button>Add Workout Log</button></a>
    </div>
</div>


</body>
</html>
