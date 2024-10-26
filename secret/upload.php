<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 设置文件上传的目标目录
    $targetDir = "uploads/";  // 确保该目录存在并且可写
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    
    // 检查目录是否存在，不存在则创建
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // 检查文件是否成功上传
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "文件 ". htmlspecialchars(basename($_FILES["file"]["name"])) . " 已成功上传。";
    } else {
        echo "上传文件时出现错误。";
    }
}
?>