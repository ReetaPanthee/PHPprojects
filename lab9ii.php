<?php
header('Content-Type: application/json');
http_response_code(404); // Sets the response code to 404
// You can output some JSON data if needed
echo json_encode(['error' => 'Not Found']);
exit;
?>
