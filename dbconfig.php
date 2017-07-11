<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["localhost"];
$username = $url["root"];
$password = $url["arrpooja"];
$db = substr($url["ebike"], 1);

$dbconfig = new mysqli($server, $username, $password, $db);
?>
