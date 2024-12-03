<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$rating = $_POST['rating'];
$quantity = $_POST['quantity'];

$sql = "UPDATE books SET name='$name', author='$author', publisher='$publisher', rating='$rating', quantity='$quantity' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
