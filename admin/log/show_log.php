<?php
$logFilePath = 'D:\phpStudy\Apache\logs\access.log';

if (file_exists($logFilePath) && is_readable($logFilePath)) {
    $logContent = file_get_contents($logFilePath);

    echo '<pre>';
    echo $logContent;
    echo '</pre>';
} else {
    echo '无法读取日志文件，请检查文件路径和权限。';
}
?>