<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Jomhuria" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            text-align: center;
            margin-top: 50px;
            width: 100%;
        }
        .left-box, .right-box {
            width: 500px;
            height: 600px;
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
            background-color: #9C9555;
        }
        .left-box {
            position: absolute;
            left: 0;
        }
        .right-box {
            position: absolute;
            right: 0;
        }
        .carousel-container {
            display: flex;
            flex-direction: column; /* Changed to column layout */
            align-items: center;
            margin: 10px auto; /* Center the carousels on the page */
            width: 100%; /* Set width to 100% */
        }
        .carousel {
            width: 95%; /* Increased carousel width to 70% */
            height: 600px; /* Increased carousel height to 600px */
            margin: 0 auto; /* Center carousel */
        }
        .carousel-inner {
            width: 100%;
            height: 100%;
        }
        .carousel-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure images cover the entire area without stretching */
        }
        .carousel-item {
            height: 600px; /* Fixed height for carousel items */
            transition: transform 0.6s ease; /* Smooth transition to prevent popping */
        }
        .carousel-control-prev,
        .carousel-control-next{
            width: auto; /* Ensure carousel controls are not squeezed */
            margin: 0 20px; /* Add margin to carousel controls */
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
    <h1 class="welcome-message">Display Garden</h1>
    <div class="container">
        <div class="left-box">
            <p>Information</p>
            <p>
                Our display garden is open to visit from Monday to Friday with a £3 charity donation.
                Based in Somerset, UK, Broadleigh Gardens has been leading the field in the propagation and mail-order retail of small bulbs for over 40 years!
We are a family run business and you can be assured of top quality bulbs from us and a personal service.
As well as a full range of iris, snowdrops, S.African bulbs and woodlanders, we hold the National Collection of Alec Gray hybrids miniature daffodils. We also have a historic collection of unusual daffodil varieties and species.
</p>
</div>
    <!-- Carousel 1 -->
    <div class="carousel-container">
        <p>Winter and Spring collection</p>
        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/HomeMainImage.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="images/HomeMainImage.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="images/HomeMainImage.png" class="d-block w-100" alt="Image 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Carousel 2 -->
    <div class="carousel-container">
        <p>Summer and Autumn collection</p>
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/HomeMainImage.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="images/HomeMainImage.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="images/HomeMainImage.png" class="d-block w-100" alt="Image 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="right-box">
        <p>Notice</p>
        <p>
            Our last Spring Catalogue of Snowdrops, South African plants and iris etc is now active and plants are selling fast.
            We have now stopped sales from our 2023 Autumn Store. We will sell these spring flowering bulbs like tulips, daffodils, crocus etc again from June 2024. They will continue to be posted from Kent.
            We have stopped selling items from our Special Bulbs List - of miniature daffs, especially the Alec Gray cultivars, dwarf bearded iris and Pacific Coast iris etc from the collections grown here in Somerset. If you are interested in any of these leave us a message in case we are still here in the autumn.
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

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<scriptsrc="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: false
        });
    });
</script>
</body>
</html>


