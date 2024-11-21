<?php
include 'config.php';
$id = $_GET['id'];

$sql = "SELECT * FROM books WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>编辑图书</title>
</head>
<body>
    <h2>编辑图书</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">    <!-- value指定输入框初始值 -->
        <label>书名：<input type="text" name="name" value="<?php echo $row['name']; ?>" required></label><br>    <!--required时bool类型，表示输入不能为空-->
        <label>作者：<input type="text" name="author" value="<?php echo $row['author']; ?>" required></label><br>
        <label>出版社：<input type="text" name="publisher" value="<?php echo $row['publisher']; ?>" required></label><br>
        <label>评分：<input type="number" step="0.1" name="rating" value="<?php echo $row['rating']; ?>"></label><br>
        <label>库存数量：<input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required></label><br>
        <button type="submit">保存更改</button>
    </form>
</body>
</html>