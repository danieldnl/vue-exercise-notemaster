<?php
$json = file_get_contents('data.json');
$data = json_decode($json);
$data->notes[] = [
    'id' => $_GET['id'],
    'title' => $_GET['title'],
    'text' => $_GET['text'],
    'color' => $_GET['color'],
    'priority' => $_GET['priority'],
    'date' => $_GET['date']
];
//var_dump($data->notes);
file_put_contents('data.json', json_encode($data));
