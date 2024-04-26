<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Workout Plans</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        .nutrition-plan {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
        }
        .nutrition-plan h3 {
            margin-top: 0;
        }
        .meal-section {
            flex: 1;
            border: 2px solid #ccc;
            border-radius: 5px;/* Add border between sections */
            padding:5px;
            margin: 5px 10px 5px 10px/* Add spacing between items and border */
        }
        .meal-list {
            padding: 0;
            list-style-type: none;
        }
        .meal-item {
            margin-bottom: 10px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4a90e2;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #357ae8;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Your Nutrition Plans</h2>

    <?php
    session_start();

    require_once 'circularQueue.php';
    require_once 'nutritionPlan.php';
    $meals = ((new nutritionPlan())->retrieveSpacificeClientWorkoutLogs($_SESSION['id']));

    $breakfast = array();
    $lunch = array();
    $dinner = array();
    $snack = array();
    foreach ($meals as $meal){
        if($meal["type"] =="Breakfast"){
        $breakfast[] = $meal;
        }elseif ($meal["type"] =="Lunch"){
            $lunch[] = $meal;
        }elseif ($meal["type"] =="Dinner"){
            $dinner[] = $meal;
        }elseif ($meal["type"] =="Snack"){
            $snack[] = $meal;
        }
    }
   // Create a circular queue with the workout logs
    $breakfastQueue = new CircularQueue($breakfast);
    $snackQueue = new CircularQueue($snack);
    $lunchQueue = new CircularQueue($lunch);
    $dinnerQueue = new CircularQueue($dinner);


    // Define the number of weeks

    $weeks = 0;
    if ($_SESSION['bundle'] == 30){
        $weeks = 4;
    }elseif ($_SESSION['bundle'] == 60){
        $weeks = 8;
    }else{
        $weeks = 12;
    }
    $portions = ["Breakfast","Snack","Lunch","Snack","Dinner"];
    $queue = null;

     //Iterate through each week
    for ($week = 1; $week <= $weeks; $week++) {
        echo "<div class='nutrition-plan'>";
        echo "<h3>Week $week</h3>";

        // Output the meals for each day
        foreach ($portions as $portion) {
            if($portion =="Breakfast"){
                $queue = $breakfastQueue;
            }if ($portion =="Snack"){
                $queue = $snackQueue;
            }if ($portion =="Lunch"){
                $queue = $lunchQueue;
            }if ($portion =="Dinner"){
                $queue = $dinnerQueue;
            }
            echo "<div class='meal-section'>";
            echo "<h4>$portion</h4>";
            echo "<ul class='meal-list'>";
            echo "<li class='meal-item'>{$queue->getNextItem()['name']}</li>";
            echo "</ul>";
            echo "</div>";
        }

        echo "</div>"; // Close nutrition-plan div for the week
    }
    ?>

    <a href="client_dashboard.php" class="btn">Back</a>
</div>

</body>
</html>
