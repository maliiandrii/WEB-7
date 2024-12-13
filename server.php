<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    $serverTime = date('Y-m-d H:i:s');

    $data['server_time'] = $serverTime;

    file_put_contents('events_log.json', json_encode($data, JSON_PRETTY_PRINT), FILE_APPEND);

    echo json_encode(['status' => 'success', 'server_time' => $serverTime]);
}
?>
