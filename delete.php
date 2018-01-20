<?php
$id = $_GET['id'];
$json = file_get_contents('data.json');
$data = json_decode($json);
foreach ($data->notes as $key => $note) {
    if ($note->id == $id) {
        unset($data->notes[$key]);
        $data->notes = array_values($data->notes);
        file_put_contents('data.json', json_encode($data));
        break;
    }
}
//var_dump($data->notes);
