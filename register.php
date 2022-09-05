<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * from users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Account created successfully :)')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Dang it. Something went wrong, go blame Jesse.')</script>";
            }
        } else {
            echo "<script>alert('Looks like this email already exists. Please choose another one.')</script>";
        }
    } else {
        echo "<script>alert('Passwords Do Not Match.')</script>";
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
    <title>Register - Fractal</title>
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
    

        <form class="box" action="register.php" method="POST">
            <h1>Register</h1>
            <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
            <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" required>
            <input type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo $_POST['cpassword']; ?>" required>
            <input type="submit" name="submit" value="Create Account">
            <a href="login.php" style="color: #8854d0; font-size: .85em;">Already have an account?</a>
        </form>
    </section>
</body>

</html>