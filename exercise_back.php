<?php
require_once 'exercise.php';

// Make a new object from exercise class with the sended parameters
$new_exercise = new exercise($_POST["name"],$_POST["description"]
    ,$_POST["muscle-targeted"],$_POST["sets"],$_POST["repetitions"]);

$message = "Exercise added sucessfully";
include 'trainer_dashboard.php';
exit();
?>