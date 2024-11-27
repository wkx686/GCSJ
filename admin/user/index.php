<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>用户管理</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>用户管理，谨慎操作！</h1>
    <table>
        <tr>
            <th>用户名</th>
            <th>密码</th>
            <th>操作</th>
        </tr>
        <?php
        include 'db_connect.php';
        $sql = "SELECT id, username, password FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "<td>
                        <a href='edit.php?id=" . $row["id"] . "'>编辑</a> |
                        <a href='delete.php?id=" . $row["id"] . "'>删除</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>暂无用户</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <a href="add.php">添加新用户</a>
</body>
</html>
