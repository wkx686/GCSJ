<?php
header('Content-Type: application/json');

// 数据库连接信息
$servername = "localhost";
$username = "root"; // 数据库用户名
$password = "root"; // 数据库密码
$dbname = "user_db";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => '数据库连接失败: ' . $conn->connect_error]));
}

// 获取输入数据
$data = json_decode(file_get_contents('php://input'), true);
if ($data === null) {
    echo json_encode(['success' => false, 'message' => '无效的输入数据']);
    exit();
}

$username = $data['username'];
$password_input = $data['password']; // 修改为 password_input 以避免变量名冲突

// 查询用户
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // 明文比较密码
    if ($user['password'] === $password_input) {
        echo json_encode(['success' => true, 'message' => '登录成功']);
    } else {
        echo json_encode(['success' => false, 'message' => '密码错误']);
    }
} else {
    echo json_encode(['success' => false, 'message' => '用户不存在']);
}

// 关闭连接
$stmt->close();
$conn->close();
?>
