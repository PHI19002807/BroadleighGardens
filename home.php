<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Jomhuria" rel="stylesheet">
    <link rel="stylesheet" href="styles/css/styles.css">
    <style>
        /* CSS styling for navbar and footer */
        body {
            background-color: #B6CEAB;
            font-family: 'Jomhuria', sans-serif;
            font-size: 24px; /* Increased font size */
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #4E5B46;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 5px;
            font-size: 24px; /* Increased font size */
        }
        .navbar h1 {
            margin: 0;
        }
        .navbar img {
            width: 75px;
            margin-right: 20px;
        }
        .navbar a.brand-link {
            color: #AFE188;
        }
        .navbar a.special-link {
            color: #000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            font-size: 36px; /* Increased font size */
        }
        .navbar a.special-link img {
            width: 20px;
            height: 20px;
            margin-bottom: 5px;
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
        }
        .address {
            margin-right: 10px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 50px;
        }
        .left-box, .right-box {
            width: 200px;
            height: 300px;
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
        }
        .middle-image {
            width: 300px;
            height: 300px;
            margin: 10px;
        }
        /* Additional styling for new messages */
        .welcome-message {
            color: #944365;
            text-align: center;
            font-family: 'Jomhuria', sans-serif;
        }
        .sub-message {
            color: black;
            text-align: center;
            font-family: 'Jomhuria', sans-serif;
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

    <!-- Main content -->
    <h1 class="welcome-message">Welcome to Broadleigh Gardens</h1>
    <h2 class="sub-message">The UK’s leading seller of top quality small bulbs and unusual perennials</h2>
    <div class="container">
        <div class="left-box">
            <p>This is the left box with text</p>
        </div>
        <img src="path/to/your/image.jpg" alt="Middle Image" class="middle-image">
        <div class="right-box">
            <p>This is the right box with text</p>
        </div>
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
