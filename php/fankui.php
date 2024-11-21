<?php
header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "library_messages";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("连接失败: ". $conn->connect_error);
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "提交成功！请耐心等待管理员的回复，我们将通过电子邮箱或短信的方式联系您！<br>";
    echo "<a href='http://127.0.0.1/gongcheng/html/fankui.html'>知道了!</a>";
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();
?>