<?php

if(isset($_POST['btn'])) {
 require_once 'client.php';
 //Make a new object from client class with the sended parameters
    $new_trainer = new client($_POST["fname"], $_POST["lname"], $_POST["gender"]
        , $_POST["username"], $_POST["password"], $_POST["email"], $_POST["date_of_birth"]
        , $_POST["phonenum"], $_POST["weight"], $_POST["height"], $_POST["waist_cer"]
        , $_POST["trainerid"],$_POST['bundle']);

 //Redirect the user to the Dashboard page after register
    header("Location: client_signin_front.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
    <style>
        /* Reset some default styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        /* Style the form fieldset */
        form fieldset {
            width: 400px;
            margin: 100px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        /* Style the heading */
        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Style the table and table elements */
        form table {
            width: 100%;
            text-align: left;
        }

        form table tr {
            margin-bottom: 10px;
        }

        form table td {
            padding: 8px 0;
        }

        form label {
            font-weight: bold;
            display: block;
        }

        #male,#female {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }



        form input[type="text"],
        form input[type="email"],
        form input[type="password"],
        form input[type="date"]
        {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"] {
            display: block;
            width: 100px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px auto 0;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

<form action="" method="POST">
    <fieldset>
        <h1>Register Form</h1>
        <hr>
        <table>
            <tr>
                <td><label for="fname">FIRST NAME</label></td>
                <td><input type="text" name="fname" id="fname" ></td>
            </tr>

            <tr>
                <td><label for="lname">LAST NAME</label></td>
                <td><input type="text" name="lname" id="lname" ></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email" placeholder="user@gmail.com" ></td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td>
                    <input type="radio" name="gender"  value="male" ><b>Male</b>
                    <br>
                    <input type="radio" name="gender"  value="female" ><b>Female</b>

                </td>
            </tr>
            <tr>
                <td><label for="phonenum">PHONE NUMBER</label></td>
                <td><input type="text" name="phonenum" id="phonenum" placeholder="+20*" ></td>
            </tr>
            <tr>
                <td><label for="date_of_birth">BIRTHDATE</label></td>
                <td><input type="date" name="date_of_birth" id="date_of_birth" ></td>
            </tr>
            <tr>
                <td><label for="height">HEIGHT</label></td>
                <td><input type="text" name="height" id="height" ></td>
            </tr>
            <tr>
                <td><label for="weight">WEIGHT</label></td>
                <td><input type="text" name="weight" id="weight" ></td>
            </tr>
            <tr>
                <td><label for="waist_cer">WAIST_CIRCUMFERENCE</label></td>
                <td><input type="text" name="waist_cer" id="waist_cer" ></td>
            </tr>
            <tr>
                <td> <label for="type">Choose your Trainer:</label></td>
                <td> <select id="trainerid" name="trainerid">
                        <?php
                        require_once 'trainer.php';
                        $trainers = ((new trainer())->viewTrainers());
                        foreach ($trainers as $trainer){
                            echo "<option value='$trainer[id]'>$trainer[fname] $trainer[lname]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td> <label for="type">Choose your Bundle:</label></td>
                <td> <select id="bundle" name="bundle">
                        <option value="30">30 days</option>
                        <option value="60">60 days</option>
                        <option value="90">90 days</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="username" ></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password" ></td>
            </tr>
            <tr>
                <td><label for="confirm_password">Confirm Password</label></td>
                <td><input type="password" name="confirm_password" id="confirm_password" ></td>
            </tr>
        </table>
        <input type="submit" name="btn" value="SUBMIT" style="margin-left:160px; margin-top:20px;">
    </fieldset>
</form>

</body>

</html>
