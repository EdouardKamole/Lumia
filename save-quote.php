<?php
header('Content-Type: application/json');

// Ensure the quotes directory exists
if (!file_exists('quotes')) {
    mkdir('quotes', 0755, true);
}

// Get the submitted data
$data = json_decode(file_get_contents('php://input'), true);

// Basic validation
if (empty($data['project_type']) {
    echo json_encode(['success' => false, 'message' => 'Project type is required']);
    exit;
}

// Generate filename with timestamp
$timestamp = date('Y-m-d_H-i-s');
$filename = "quotes/quote_{$timestamp}_{$data['estimate_id']}.json";

// Save to file
if (file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT))) {
    // In a real app, you might also save to database here
    
    // Generate PDF (would require a library like TCPDF)
    // generatePdfQuote($data, str_replace('.json', '.pdf', $filename));
    
    echo json_encode([
        'success' => true,
        'message' => 'Quote saved successfully',
        'estimate_id' => $data['estimate_id']
    ]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error saving quote']);
}

// Helper function to generate PDF (example stub)
function generatePdfQuote($data, $pdfPath) {
    // This would use a PDF generation library in a real implementation
    // For example:
    /*
    require_once('tcpdf/tcpdf.php');
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 10, 'Your Quote Estimate', 0, 1);
    // Add more content...
    $pdf->Output($pdfPath, 'F');
    */
}
?>