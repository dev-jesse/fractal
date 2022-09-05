<?php 

$server = "us-cdbr-east-06.cleardb.net";
$user = "b325bf00362f81";
$pass = "f98f7673";
$database = "fractal_login_system";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}



?>