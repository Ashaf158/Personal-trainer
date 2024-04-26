<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        /* Reset default browser styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Style the body */
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style the container */
        .container {
            background-color: gray;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        /* Style the heading */
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Style the form */
        form {
            display: flex;
            flex-direction: column;
        }

        /* Style the label */
        label {
            margin-bottom: 5px;
        }

        /* Style the input */
        input[type="text"] {
            padding: 10px;
            margin-bottom: 40px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Style the button */
        button {
            background-color: blue;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Button hover effect */
        button:hover {
            background-color: darkblue;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Reset Password</h2>
    <form action="pass_reset2_front.php" method="POST">
        <?php if(isset($error_msg)) { ?>
            <p style="color: red;"><?php echo $error_msg; ?></p>
        <?php } ?>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter The User name" required>

        <button type="submit">Next</button>
    </form>
</div>
</body>

</html>
