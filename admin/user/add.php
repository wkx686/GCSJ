<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>添加用户</title>
</head>
<body>
    <h1>添加新用户</h1>
    <form action="add_user.php" method="post">
        <label for="username">用户名:</label>
        <input type="text" name="username" required><br>
        <label for="password">密码:</label>
        <input type="text" name="password" required><br>
        <button type="submit">添加</button>
    </form>
</body>
</html>
