<!DOCTYPE html>
<html>
<head>
    <title>Food Entry Form</title>
    <style>
        /* CSS Styling */
        body {
            font-family: Arial, sans-serif;
            /* Set the background fitness photo */

            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form {
            display: flex;
            flex-direction: column;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        form fieldset {
            width: 400px;
            margin: 100px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);


        }
    </style>
</head>
<body>

<div class="container">
    <h2>Food Entry Form</h2>

    <form action="meal_back.php" method="post" class="form">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>
        </div>

        <div class="form-group">
            <label for="calories">Calories:</label>
            <input type="text" id="calories" name="calories" required>
        </div>

        <div class="form-group">
            <label for="protein">Protein:</label>
            <input type="text" id="protein" name="protein" required>
        </div>

        <div class="form-group">
            <label for="carbs">Carbs:</label>
            <input type="text" id="carbs" name="carbs" required>
        </div>

        <div class="form-group">
            <label for="fats">Fats:</label>
            <input type="text" id="fats" name="fats" required>
        </div>

        <div class="form-group">
            <label for="type">Type:</label>
            <select id="type" name="type">
                <option value="Breakfast">Breakfast</option>
                <option value="Lunch">Lunch</option>
                <option value="Dinner">Dinner</option>
                <option value="Snack">Snack</option>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>

</div>

</body>
</html>
