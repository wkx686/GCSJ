<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>图书管理</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>图书管理，谨慎操作！</h1>

    <table>
        <tr>   <!--定义表头行-->
            <th>编号</th>    <!--定义表头单元格_-->
            <th>书名</th>
            <th>作者</th>
            <th>出版社</th>
            <th>评分</th>
            <th>库存数量</th>
            <th>操作</th>
        </tr>
        
        <?php
        $sql = "SELECT * FROM books";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";    //定义新表格行
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['publisher'] . "</td>";
                echo "<td>" . $row['rating'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>
                        <a href='edit.php?id=".$row['id']."'>编辑</a> |
                        <a href='delete.php?id=".$row['id']."' onclick='return confirm(\"确定删除吗？\");'>删除</a>  
                      </td>";        //通过?id=将id值传给edit.php和delete.php
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>没有图书数据</td></tr>";
        }
        ?>
    </table>

    <h2>添加新图书</h2>
    <form action="insert.php" method="post">
        <label>书名：<input type="text" name="name" required></label><br>
        <label>作者：<input type="text" name="author" required></label><br>
        <label>出版社：<input type="text" name="publisher" required></label><br>
        <label>评分：<input type="number" step="0.1" name="rating"></label><br>
        <label>库存数量：<input type="number" name="quantity" required></label><br>
        <button type="submit">添加图书</button>
    </form>
</body>
</html>
