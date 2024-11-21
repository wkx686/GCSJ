<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("连接失败: ". $conn->connect_error);
}

// 查询书籍总数
$sql_total_books = "SELECT COUNT(*) AS total_books FROM books";
$result_total_books = $conn->query($sql_total_books);
$row_total_books = $result_total_books->fetch_assoc();
$total_books = $row_total_books['total_books'];

// 查询书籍种类总数
$sql_total_book_types = "SELECT COUNT(DISTINCT name) AS total_book_types FROM books";
$result_total_book_types = $conn->query($sql_total_book_types);
$row_total_book_types = $result_total_book_types->fetch_assoc();
$total_book_types = $row_total_book_types['total_book_types'];

// 查询出版社种类总数
$sql_total_publishers = "SELECT COUNT(DISTINCT publisher) AS total_publishers FROM books";
$result_total_publishers = $conn->query($sql_total_publishers);
$row_total_publishers = $result_total_publishers->fetch_assoc();
$total_publishers = $row_total_publishers['total_publishers'];

// 查询书籍平均评分
$sql_average_rating = "SELECT AVG(rating) AS average_rating FROM books";
$result_average_rating = $conn->query($sql_average_rating);
$row_average_rating = $result_average_rating->fetch_assoc();
$average_rating = $row_average_rating['average_rating'];

$conn->close();

// 将数据以 JSON 格式返回
header('Content-Type: application/json; charset=utf-8');
echo json_encode([
    'totalBooks' => $total_books,
    'totalBookTypes' => $total_book_types,
    'totalPublishers' => $total_publishers,
    'averageRating' => $average_rating
], JSON_UNESCAPED_UNICODE);
?>