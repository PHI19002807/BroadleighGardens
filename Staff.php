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
            font-size: 28px;
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
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-start;
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
            width: 280px;
            height: 400px;
            margin: 0 auto;
        }
        .landscape-box {
            position: absolute;
            top: 450px;
            left: 50%;
            transform: translateX(-50%);
            width: 900px;
            height: 200px;
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
        .BookMessage {
            color: black;
            text-align: center;
            font-family: 'Jomhuria', sans-serif;
            font-weight: normal;
        }
        .top-left-image-container {
            position: absolute;
            top: 0;
            left: 20px;
            transform: translateY(-100%);
        }

        .top-left-image {
            width: 325px;
            height: 200px;
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
    <h1 class="welcome-message">Staff</h1>
    <h1 class="BookMessage">Christine's Guide</h1>
    <div class="container">
        <!-- Image container at the top left -->
        <div class="top-left-image-container">
            <img src="images/StaffCS.png" alt="Top Left Image" class="top-left-image">
        </div>
        
        <!-- Left box -->
        <div class="left-box">
            <p>Christine Skelmersdale</p>
            <p>
                Christine Skelmersdale has been an enthusiastic gardener since childhood and has been the Managing Director of Broadleigh Gardens, a nursery which specialises in smaller bulbs, woodland and foliage plants for 40+ years. The 5 acre garden is open every weekday for a charitable donation. 
                A keen plant photographer with an extensive library of slides. An inspirational lecturer, she lectures widely in Britain and abroad both on gardening topics and plants in the wild (China, Nepal, S.Andes etc.). 
                She also specialises in Day Courses on the background and use of bulbs creatively in the garden, but also has a long list of general lectures - she has been recently described as “an exhilarating lecturer with contagious enthusiasm”
            </p>
        </div>
        
        <!-- Middle image -->
        <img src="images/Staff.jpg" alt="Middle Image" class="middle-image">
        <p></p>
        
        <!-- Landscape box -->
        <div class="landscape-box">
            <p>Christine the author</p>
            <p>
                Author of "Creative Gardening with Bulbs" (1989), she writes articles and reviews for, amongst others, The Garden, The Daily Telegraph, Gardeners' World Magazine and published “Gardeners Guide to Bulbs” in July 2012.
                She was a member of the Council of the Royal Horticultural Society for 11 years. She was a member of the Gardens Committee, with special responsibility of Rosemoor, for 12 years and was Vice Chairman of the Bulb Committee and a member of the Daffodil and Tulip Year Book Committee.

            </p>
        </div>
        
        <!-- Right box -->
        <div class="right-box">
            <p>In the office:</p>
            <p>Gill deals with your orders and queries.</p>
            <p>In the nursery:</p>
            <p>Andrew and Nick grow and look after the plants</p>

            <p>Additional information on Christine</p>
            <p>
                Species peonies are one of her passions and there is a large collection of peonies at Broadleigh.
                As President of Friends of the Bristol Botanic Garden, she was heavily involved in the move to The Holmes and the creation of the new garden. She remains on the Curatorial Advisory Committee.
                In 2002 she was made an Honorary Fellow of Myerscough College ( University of Lancaster)
                At the 2009 Hampton Court Flower Show Christine Skelmersdale was presented with the Victoria Medal of Honour (VMH) - the RHS's highest award for services to horticulture.
                She has been a member and chairman of many RHS trial Forums that award the coveted AGM.
                In April 2020 she was awarded the Peter Barr Memorial Cup for her services to daffodils.
            </p>
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
