<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>反馈信息</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>用户反馈</h1>

    <table>
        <tr>
            <th>编号</th>
            <th>姓名</th>
            <th>电话</th>
            <th>邮箱</th>
            <th>留言内容</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        
        <?php
        $sql = "SELECT * FROM messages";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "<td><a href='delete.php?id=".$row['id']."' onclick='return confirm(\"确定删除这条留言吗？\");'>删除</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>没有留言信息</td></tr>";
        }
        ?>
    </table>
</body>
</html>
