<?php
$response = array(
    'date' => date('Y-m-d'),
    'time' => date('H:i:s')
);

header('Content-Type: application/json');
echo json_encode($response);
?>
