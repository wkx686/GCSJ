<?php
include 'db_connect.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>编辑用户</title>
</head>
<body>
    <h1>编辑用户</h1>
    <form action="update_user.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="username">用户名:</label>
        <input type="text" name="username" value="<?php echo $user['username']; ?>" required><br>
        <label for="password">密码:</label>
        <input type="text" name="password" value="<?php echo $user['password']; ?>" required><br>
        <button type="submit">更新</button>
    </form>
</body>
</html>
