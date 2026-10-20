
<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'POST request required.'
    ]);
    exit;
}

if (!isset($_FILES['file'])) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'No file received.'
    ]);
    exit;
}

$file = $_FILES['file'];

if ($file['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'File upload error.'
    ]);
    exit;
}

if ($file['size'] > 10 * 1024 * 1024) {
    http_response_code(413);
    echo json_encode([
        'success' => false,
        'message' => 'Maximum file size is 10 MB.'
    ]);
    exit;
}

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($file['tmp_name']);

$allowed = [
    'image/jpeg' => 'jpg',
    'image/png' => 'png',
    'image/webp' => 'webp',
    'application/pdf' => 'pdf'
];

if (!isset($allowed[$mime])) {
    http_response_code(415);
    echo json_encode([
        'success' => false,
        'message' => 'Only JPG, PNG, WEBP and PDF files are allowed.'
    ]);
    exit;
}

$uploadDir = dirname(__DIR__) . '/assets/upload/';

if (!is_dir($uploadDir) &&
    !mkdir($uploadDir, 0755, true) &&
    !is_dir($uploadDir)) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Could not create upload folder.'
    ]);
    exit;
}

if (!is_writable($uploadDir)) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Upload folder is not writable.'
    ]);
    exit;
}

$fileName = bin2hex(random_bytes(16)) . '.' . $allowed[$mime];
$destination = $uploadDir . $fileName;

if (!move_uploaded_file($file['tmp_name'], $destination)) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Could not save uploaded file.'
    ]);
    exit;
}

$https = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
$scheme = $https ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? '';

if ($host === '') {
    unlink($destination);
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Server host not available.'
    ]);
    exit;
}

$url = $scheme . '://' . $host .
       '/assets/upload/' . rawurlencode($fileName);

echo json_encode([
    'success' => true,
    'url' => $url
]);
