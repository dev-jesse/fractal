<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome - Fractal</title>
</head>
<body>
    <section class="hero">
        <nav>
            <h2 class="logo"><a href="#">Fractal</a></h2>
            <div class="sidebar" id="sidebar">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><button type="button"><a href="logout.php">Logout</a></button></li>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>

        <video src="img/plexus.mp4" class="site-bg" muted loop autoplay preload="auto"></video>
        <video src="img/mobile-bg.mp4" class="mobile-bg" muted loop autoplay preload="auto"></video>
        <div class="overlay"></div>

        <div class="content">
            <?php echo "<h2> Welcome " . $_SESSION['username'] . "</h2>"; ?>
            <p>Since this is a mock site, there is not much content to provide. <br> Thank you for testing out my login system and have a great day :)</p>
        </div>
    </section>
</body>
</html>