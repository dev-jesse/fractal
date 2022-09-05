<?php 

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);


// Localhost:
// $server = "localhost";
// $user = "root";
// $pass = "";
// $database = "fractal_login_system";

// $conn = mysqli_connect($server, $user, $pass, $database);

// if (!$conn) {
//     die("<script>alert('Connection Failed.')</script>");
// }

?>