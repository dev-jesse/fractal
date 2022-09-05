<?php 

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

// $server = "us-cdbr-east-06.cleardb.net";
// $user = "b325bf00362f81";
// $pass = "f98f7673";
// $database = "fractal_login_system";

// $conn = mysqli_connect($server, $user, $pass, $database);

// if (!$conn) {
//     die("<script>alert('Connection Failed.')</script>");
// }

?>