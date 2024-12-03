<?php
include 'db_connect.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "用户信息更新成功";
} else {
    echo "错误: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
