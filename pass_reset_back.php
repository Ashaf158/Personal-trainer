<?php
require_once 'client.php';
session_start();
$a = new client();
$z = $_SESSION["pass_reset_front1"];
$x = $_POST["oldPassword"];
$c = $_POST["newPassword"];

$a->resetPassword($z,$x,$c);



?>