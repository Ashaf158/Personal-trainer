<?php
require_once 'meal.php';

// Make a new object from meal class with the sended parameters
$new_meal = new meal($_POST["name"],$_POST["description"]
    ,$_POST["type"],$_POST["calories"],$_POST["protein"]
    ,$_POST["carbs"],$_POST["fats"]);
$message = "Meal added sucessfully";
include 'trainer_dashboard.php';
exit();

?>