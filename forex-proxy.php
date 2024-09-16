<?php
// Set headers to allow cross-origin access (if needed)
header('Content-Type: application/json');

// Fetch the data from the Forex API
$apiUrl = 'http://forex.cbm.gov.mm/api/latest';
$response = file_get_contents($apiUrl);

// Echo the response back to the client
if ($response !== false) {
    echo $response;
} else {
    echo json_encode(['error' => 'Failed to fetch data from the API.']);
}
?>
