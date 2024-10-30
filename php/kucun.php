<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json; charset=utf-8');

// 连接数据库
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn->set_charset("utf8mb4")) {
    die("Error loading character set utf8mb4: ". $conn->error);
}

if ($conn->connect_error) {
    die("连接失败: ". $conn->connect_error);
}

// 获取所有书籍数据
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

$books = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}

// 返回 JSON 格式的数据
header('Content-Type: application/json');
echo json_encode($books);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['borrow']) && isset($_POST['bookId'])) {
    $bookId = $_POST['bookId'];
    // 减少书籍数量的 SQL 查询
    $updateSql = "UPDATE books SET quantity = quantity - 1 WHERE id = $bookId";
    $conn->query($updateSql);
    // 返回更新后的书籍数据
    $sql = "SELECT * FROM books WHERE id = $bookId";
    $result = $conn->query($sql);
    $updatedBook = $result->fetch_assoc();
    header('Content-Type: application/json');
    echo json_encode($updatedBook);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['return']) && isset($_POST['bookId'])) {
    $bookId = $_POST['bookId'];
    // 增加书籍数量的 SQL 查询
    $updateSql = "UPDATE books SET quantity = quantity + 1 WHERE id = $bookId";
    $conn->query($updateSql);
    // 返回更新后的书籍数据
    $sql = "SELECT * FROM books WHERE id = $bookId";
    $result = $conn->query($sql);
    $updatedBook = $result->fetch_assoc();
    header('Content-Type: application/json');
    echo json_encode($updatedBook);
}

$conn->close();
?>