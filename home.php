<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="styles/css/styles.css">
    <style>
        /* CSS styling for navbar and footer */
        body {
            background-color: #B6CEAB;
            font-family: Arial, sans-serif;
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
            margin-right: 0px;
        }
        .navbar h1 {
            margin: 0;
        }
        .navbar img {
            width: 75px;
            margin-right: 20px;
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
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h1><img src="images/logo.png" alt="Logo"></h1>
        <a href="#">Broadleigh Gardens</a>
        <a href="#">Home</a>
        <a href="#">News</a>
        <a href="#">Shop Now</a>
        <a href="#">About Broadleigh</a>
        <a href="#">Gift Token</a>
        <a href="#">Display Garden</a>
        <a href="#">Staff</a>
        <a href="#">Review</a>
        <a href="#">Loyalty</a>
    </div>

    <!-- Main content -->
    <h1>Welcome to Our Store</h1>
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
