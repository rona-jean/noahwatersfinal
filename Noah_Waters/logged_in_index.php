<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noah Waters</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        /* Additional styles for hamburger menu */
        @media (max-width: 700px) {
            .guest-navbar {
                position: relative;
                z-index: 1000;
            }
            .guest-navbar-links {
                z-index: 999;
            }
        }
    </style>
</head>

<body>

<nav class="navbar">
        <div class="logo">
            <img src="logo.jpg" class="logo">
        </div>
        <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="nav-menu">
            <li class="nav-item"><a href="#about" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link">Contact Us</a></li>
            <li class="nav-item"><a href="track_order_user.php" class="nav-link">My Orders</a></li>
            <li class="nav-item"><a href="admin_orders.php" class="nav-link">Admin Page</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Exit</a></li>
        </ul>
    </nav>

    <div class="content-container">
        <div class="gallon-container">
            <img src="round_gallon.png" class="gallon">
        </div>

        <div class="tagline-container">
            <h1 class="tagline">
                Delivering Purity,<br> One Refill at a Time
            </h1>
        </div>
    </div>

    <div class="button-container">
        <a href="menu.php" class="order-btn" style="text-decoration: none; display: inline-block; text-align: center; padding: 15px 70px; font-size: 1.8rem; background-color: #112752; color: #79c7ff; border: none; border-radius: 30px; cursor: pointer; transition: all 0.3s ease; font-family: 'Boogaloo', sans-serif; box-shadow: inset 4px 4px 4px rgba(0, 0, 0, 0.50);">Order Now</a>
        <div class="auth-buttons">
            <a href="logout.php"><button class="login-btn">Logout</button></a>
        </div>
    </div>

    <div class="background-container">
        <img src="back.webp" class="background">
    </div>

    <div id="about" class="about-section">
        <h2>About Us</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Noah Waters, your trusted water refilling station in Halayhay, Tanza, Cavite and around the area. We are committed to providing clean, safe, and pure drinking water to our community.
                    With years of experience in the water purification industry, we ensure that every drop of water we deliver meets the highest standards of quality and safety.</p>
                <div class="features">
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>100% Purified Water</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-truck"></i>
                        <span>Fast Delivery</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-shield-alt"></i>
                        <span>Quality Assured</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-section">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <p>(046) 435-8524 | 0936-442-8287</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <p>noahwaters@gmail.com</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>084 Brgy. Halayhay, Tanza, Cavite, Philippines</p>
            </div>
        </div>
    </div>

    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });

        document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }));
    </script>
</body>
</html>