<?php
// Error Logging and User Redirects
function showDbError($type, $msg) {
    file_put_contents(__DIR__ . '/error_log_mysql', PHP_EOL . (new DateTime())->format('Y-m-d H:i:s') . ' : ' . $msg, FILE_APPEND);
    header('location: error.php?type=db&detail=' . $type);
    exit();
}