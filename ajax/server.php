<?php


$rawData = file_get_contents("php://input");

$data = json_decode($rawData, 1);

if ($data['action'] == 'sumatorius') {
    $rezultatas = (float)$data['x'] + (float)$data['y'];
}

$rez = json_encode(['rez' => $rezultatas, 'linkejimai' => 'nuo serverio']);
header('Content-type: application/json');

echo $rez; // cia yra siuntimas, ne spausdinimas