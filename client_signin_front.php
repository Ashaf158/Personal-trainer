<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .button,input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover,input[type="submit"]:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Sign In</h1>
    <form action="signin_back.php" method="POST">
        <?php if(isset($error_msg)) { ?>
            <p style="color: red;"><?php echo $error_msg; ?></p>
        <?php } ?>
        <input type="hidden" name="form_type" value="form1">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <input type="submit" value="Sign In">
        <input type="submit" name="trainer" value="trainer">
        <?php
        if(isset($_POST['trainer'])){
            header("Location: trainer_signin_front.php");
            exit();
        }
        ?>


    </form>
</div>

</body>
</html>



