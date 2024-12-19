<?php
header('Content-Type: application/json');

// Receive the POST data
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Add timestamp
$data['timestamp'] = date('Y-m-d H:i:s');

// Format the log entry
$logEntry = "[" . $data['timestamp'] . "] " . json_encode($data) . "\n";

// Save to logs.txt in the same directory
$logFile = 'logs.txt';

// Append the new entry to the file
file_put_contents($logFile, $logEntry, FILE_APPEND);

echo json_encode(['status' => 'success', 'message' => 'Visitor information saved']);
?>