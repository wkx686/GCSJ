<?php
include 'db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "新用户添加成功";
} else {
    echo "错误: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
