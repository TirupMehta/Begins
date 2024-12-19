<?php
header('Content-Type: application/json');

// Get raw POST data
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['htmlCode'])) {
    $htmlCode = $data['htmlCode'];

    // Convert HTML to JavaScript using String.fromCharCode
    $charCodes = array_map('ord', str_split($htmlCode));
    $encodedJs = 'document.documentElement.innerHTML=String.fromCharCode(' . implode(',', $charCodes) . ');';

    // Generate a unique filename
    $filename = 'gen/' . uniqid() . '.js';

    // Ensure the 'gen' directory exists
    if (!is_dir('gen')) {
        mkdir('gen', 0777, true);
    }

    // Save the encoded JavaScript to the file
    file_put_contents($filename, $encodedJs);

    // Automatically determine the host URL
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $baseUrl = $protocol . '://' . $host;

    // Return the full URL of the generated script
    echo json_encode([
        'generatedScript' => "<script type=\"text/javascript\" src=\"$baseUrl/projects/jso/$filename\"></script>",
    ]);
} else {
    echo json_encode(['error' => 'No HTML code provided']);
}
?>