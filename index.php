<?php

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Fractal</title>
</head>

<body>
    <section class="hero">
        <nav>
            <h2 class="logo"><a href="#">Fractal</a></h2>
            <div class="sidebar" id="sidebar">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><button type="button"><a href="login.php">Login</a></button></li>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>

        <video src="img/plexus.mp4" class="site-bg" muted loop autoplay preload="auto"></video>
        <video src="img/mobile-bg.mp4" class="mobile-bg" muted loop autoplay preload="auto"></video>
        <div class="overlay"></div>

        <div class="content">
            <h2>Introducing Fractal</h2>
            <p>A revoluntinary study comprehension device, prioritizing your grades.</p>
            <a href="login.php" class="startBtn">Get Started</a>
            <button class="mobileBtn">Get Started</button>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>