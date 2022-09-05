<?php 

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

// $server = "us-cdbr-east-06.cleardb.net";
// $user = "b325bf00362f81";
// $pass = "f98f7673";
// $database = "fractal_login_system";

// $conn = mysqli_connect($server, $user, $pass, $database);

// if (!$conn) {
//     die("<script>alert('Connection Failed.')</script>");
// }

?>