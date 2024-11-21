<?php
include 'config.php';

$name = $_POST['name'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$rating = $_POST['rating'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO books (name, author, publisher, rating, quantity) VALUES ('$name', '$author', '$publisher', '$rating', '$quantity')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
