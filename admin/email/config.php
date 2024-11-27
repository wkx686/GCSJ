<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "library_messages";
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("UTF-8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
