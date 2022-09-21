<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = sha2($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: welcome.php");
    } else {
        echo "<script>alert('Looks like you entered your email or password incorrectly. Please try again.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login - Fractal</title>
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
    

        <form class="box" action="login.php" method="POST">
            <h1>Login</h1>
            <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
            <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" required>
            <input type="submit" name="submit" value="Login">
            <a href="register.php" style="color: #8854d0; font-size: .85em;">Need an account?</a>
        </form>
    </section>
</body>

</html>