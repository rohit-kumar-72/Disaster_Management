<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "geolocation";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$accuracy = $_POST["accuracy"];
$sql = "INSERT INTO location (latitude, longitude, accuracy) VALUES ($latitude, $longitude, $accuracy)";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}
mysqli_close($conn);
?>