<?php
include 'db_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "用户删除成功";
} else {
    echo "错误: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
