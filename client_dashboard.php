

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;

        }
        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .profile-img {
            position: absolute;
            top: 25px;
            right: 17px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
        }
        .profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;

        }
        .jumbotron h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .jumbotron p {
            font-size: 20px;
        }
        .stats-section {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .stats-section h2 {
            margin-bottom: 20px;
        }
        .stat-boxes {
            display: flex;
            justify-content: center;
        }
        .stat-box {
            background-color: #fff;
            padding: 20px;
            margin: 0 10px;
            border-radius: 5px;
            flex: 1;
        }
        .stat-box h3 {
            margin-bottom: 10px;
        }
        .stat-box p {
            margin: 5px 0;
        }
        .progress-bar {
            width: 100%;
            background-color: #ddd;
            height: 20px;
            border-radius: 5px;
            margin-bottom: 10px;
            overflow: hidden;
        }
        .progress {
            background-color: #4a90e2;
            height: 100%;
            border-radius: 5px;
        }

    </style>
</head>
<body>

<header>
    <h1>Client Dashboard</h1>
    <div class="profile-img">
        <a href="profile_front.php">
            <img src="tree-736885_1280.jpg" alt="Profile Image">
        </a>
    </div>

    <h4 style="color: white;text-align: end;font-size: 20px">Profile</h4>
</header>
<nav>
    <a href="client_view_WorkoutPlan.php">Workout Plan</a>
    <a href="client_view_NutritionPlan.php">Nutrition plan</a>
    <a href="chat_front.php">Communication</a>
</nav>
<?php
session_start();
require_once 'nutritionPlan.php';

$meals = ((new nutritionPlan())->retrieveSpacificeClientWorkoutLogs($_SESSION['id']));
    $protein = 0;
     $carbs  = 0;
     $fats  = 0;
     $calories = 0;
    foreach ($meals as $meal){
        $protein+=(int)$meal["protein"];
        $carbs+=(int)$meal["carbs"];
        $fats+=(int)$meal["fats"];
        $calories+=(int)$meal["calories"];
    }
?>

<div class="container">
    <div class="stats-section">
        <h2>Client Statistics</h2>
        <div class="stat-boxes">
            <div class="stat-box">
                <h3>Current Weight</h3>
                <p><?php echo $_SESSION["weight"]; ?>Kg</p>
            </div>
            <div class="stat-box">
                <h3>Daily Calories Needed</h3>
                <p><?php echo $calories;?> kcal</p>
            </div>
            <div class="stat-box">
                <h3>Daily Macronutrients</h3>
                <p>Protein:<?php echo $protein; ?>g</p>
                <p>Carbs: <?php echo $carbs; ?>g</p>
                <p>Fats: <?php echo $fats; ?>g</p>
            </div>
            <div class="stat-box">
                <h3>Days of Bundle</h3>
                <p><?php echo $_SESSION["bundle"]; ?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="stats-section">
            <h2>Client Statistics</h2>
            <div class="progress-bar">
                <div class="progress" style="width: 80%;"></div>
            </div>
            <div class="progress-bar">
                <div class="progress" style="width: 40%;"></div>
            </div>
            <div class="progress-bar">
                <div class="progress" style="width: 80%;"></div>
            </div>
        </div>
    </div>


</body>
</html>
