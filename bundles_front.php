<!                                                                                              DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Trainer Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        section {
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            background-color: #f9f9f9;
            border-radius: 10px;
        }
        .bundle-selection {
            display: flex;
            justify-content: space-between;
        }
        .bundle-box {
            flex: 0 0 30%; /* Adjust the width of each box */
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 700px; /* Adjust the height as needed */
        }


        .bundle-duration {
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .bundle-details {
            font-size: 18px;
        }
        .bundle-image{
            margin: 5px;


        }
    </style>
</head>
<body>

<header>
    <h1>Personal Trainer Website</h1>
</header>

<section class="bundle-selection">
    <a href="home_front.php" class="back-btn">Back to Home</a>
    <div class="bundle-box">
        <div class="bundle-duration">3 Months</div>
        <div class="bundle-details">Customized workout and nutrition plan for 3 months.</div>
        <div class="bundle-details">Weekly check-ins and progress tracking.</div>
        <div class="bundle-image"><img src="tree-736885_1280.jpg" height="600" width="450"></div>
    </div>
    <div class="bundle-box">
        <div class="bundle-duration">6 Months</div>
        <div class="bundle-details">Customized workout and nutrition plan for 6 months.</div>
        <div class="bundle-details">Bi-weekly check-ins and progress tracking.</div>
        <div class="bundle-image"><img src="tree-736885_1280.jpg" height="600" width="450"></div>

    </div>
    <div class="bundle-box">
        <div class="bundle-duration">1 Year</div>
        <div class="bundle-details">Customized workout and nutrition plan for 1 year.</div>
        <div class="bundle-details">Monthly check-ins and progress tracking.</div>
        <div class="bundle-image"><img src="tree-736885_1280.jpg" height="600" width="450"></div>

    </div>
</section>

</body>
</html>
