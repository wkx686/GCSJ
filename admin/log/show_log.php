<?php
$logFilePath = '/var/log/httpd/access_log';

if (file_exists($logFilePath) && is_readable($logFilePath)) {
    $logContent = file_get_contents($logFilePath);    //获取文件内容

    echo '<pre>';   //原格式输出
    echo $logContent;
    echo '</pre>';
} else {
    echo '无法读取日志文件，请检查文件路径和权限。';
}
?>
