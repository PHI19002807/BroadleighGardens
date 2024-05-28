<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Jomhuria" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #B6CEAB;
            font-family: 'Jomhuria', sans-serif;
            font-size: 24px;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #4E5B46;
            color: #fff;
            padding: 2px 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
            font-size: 40px;
            margin-top: 12px;
            display: flex;
            align-items: center;
        }
        .navbar a:last-child {
            margin-right: 0;
        }
        .navbar h1 {
            margin: 0;
        }
        .navbar img {
            width: 75px;
            margin-right: 10px;
        }
        .navbar a.brand-link {
            color: #AFE188;
        }
        .navbar a.special-link {
            color: #000;
            display: flex;
            align-items: center;
            font-size: 36px;
            margin-right: 10px;
            margin-top: 12px;
        }
        .navbar a.special-link img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
        .navbar a.special-link:last-of-type img {
            width: 40px;
            height: 40px;
        }
        .navbar a.special-link:nth-last-of-type(2) img,
        .navbar a.special-link:nth-last-of-type(3) img {
            width: 50px;
            height: 50px;
        }
        .navbar .right-links {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }
        .footer {
            background-color: #4E5B46;
            color: #fff;
            padding: 10px 20px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: calc(100% - 40px);
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            font-family: 'K2D', sans-serif;
        }
        .address {
            margin-right: 10px;
        }
        .container {
            position: relative; /* Make the container relative for absolute positioning */
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Change to align items at the top */
            text-align: center;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        .left-box, .right-box {
            width: 500px;
            height: 600px;
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
            background-color: #9C9555;
        }
        .middle-image {
            width: 627px;
            height: 399px;
            margin: 0 auto;
        }
        .landscape-box {
            width: 80%;
            height: 300px;
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
            background-color: #9C9555;
        }
        .welcome-message {
            color: #944365;
            text-align: center;
            font-family: 'Jomhuria', sans-serif;
            font-size: 80px;
            font-weight: normal;
        }
        .sub-message {
            color: black;
            text-align: center;
            font-family: 'Jomhuria', sans-serif;
            font-weight: normal;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h1><a href="Home.php"><img src="images/logo.png" alt="Logo"></a></h1>
        <a href="Home.php" class="brand-link">Broadleigh Gardens</a>
        <a href="Home.php">Home</a>
        <a href="News.php">News</a>
        <a href="ShopNow.php">Shop Now</a>
        <a href="AboutBroadleigh.php">About Broadleigh</a>
        <a href="GiftToken.php">Gift Token</a>
        <a href="DisplayGarden.php">Display Garden</a>
        <a href="Staff.php">Staff</a>
        <a href="Reviews.php">Reviews</a>
        <a href="Loyalty.php">Loyalty</a>
        <div class="right-links">
            <a href="SignUp.php" class="special-link">
                <img src="images/SignUp.png" alt="Sign Up Icon">
                Sign Up
            </a>
            <a href="Login.php" class="special-link">
                <img src="images/Login.png" alt="Login Icon">
                Login
            </a>
            <a href="Basket.php" class="special-link">
                <img src="images/Basket.png" alt="Basket Icon">
                Basket
            </a>
        </div>
    </div>

    <!-- Main content -->
    <h1 class="welcome-message">News</h1>
    <div class="container">
        <div class="landscape-box">
            <p>We produce two online lists a year:</p>
            <p>
                Our spring catalogue will be sent out in January and orders are sent from Taunton, from late January to early April.
                Our spring flowering bulbs like tulips will now be posted by another firm and enquiries regarding these orders should be addressed to them:
            </p>
            <p>
                broadleigh@dejager.co.uk
            </p>
            <p>
                01622 845990
            </p>
            <p>
                Bulbs from our Alec Gray collection of miniature daffodils and other rare bulbs will be posted from here in August/September. See Special Bulbs list for these.
            </p>
            <p>
                Christine Skelmersdale is a well known and inspirational lecturer.
            </p>
        </div>
        <img src="images/HomeMainImage.png" alt="Middle Image" class="middle-image">
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="address">
            <p>Address: Barr House, Bishops Hull, Taunton, Somerset, TA4 1AE</p>
        </div>
        <div class="copyright-right">
            <p>Copyright © 2023 Will Phillips</p>
        </div>
    </div>
</body>
</html>
