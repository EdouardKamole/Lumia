<?php
header('Content-Type: application/json');

// Enable CORS if needed
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get the raw POST data
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Validate JSON data
if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid JSON data']);
    exit;
}

// Validate required fields
if (empty($data['project_type']) || empty($data['contact_info']['email']) || empty($data['contact_info']['name'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Required fields are missing']);
    exit;
}

// Ensure the quotes directory exists
$quotesDir = __DIR__ . '/quotes';
if (!file_exists($quotesDir)) {
    if (!mkdir($quotesDir, 0755, true)) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Could not create quotes directory']);
        exit;
    }
}

// Generate filename
$timestamp = date('Y-m-d_His');
$filename = "quote_{$timestamp}_{$data['estimate_id']}.json";
$filepath = $quotesDir . '/' . $filename;

// Save to file
try {
    $bytesWritten = file_put_contents($filepath, json_encode($data, JSON_PRETTY_PRINT));
    
    if ($bytesWritten === false) {
        throw new Exception('Failed to write quote file');
    }
    
    // Success response
    echo json_encode([
        'success' => true,
        'message' => 'Quote saved successfully',
        'estimate_id' => $data['estimate_id'],
        'file_path' => $filename
    ]);
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Error saving quote: ' . $e->getMessage()
    ]);
}
?>