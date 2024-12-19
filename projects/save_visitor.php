<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ip'])) {
    $ip = $_POST['ip'];
    $timestamp = date('Y-m-d H:i:s');
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    
    $visitorInfo = "$timestamp | IP: $ip | User Agent: $userAgent\n";
    
    $file = 'visitor_log.txt';
    file_put_contents($file, $visitorInfo, FILE_APPEND | LOCK_EX);
    
    echo "Visitor information saved successfully";
} else {
    http_response_code(400);
    echo "Bad Request";
}
?>