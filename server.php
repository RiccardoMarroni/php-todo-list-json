<?php

$todolist = file_get_contents("data.json");
$method = $_SERVER['REQUEST_METHOD'];
if ($method !== 'GET') {
    $tasks = json_decode($taskJson, true);

    if ($method === 'POST') {
        if (isset($_POST['id'])) {
            $newtask = [
                'id' => (int) $_POST['id'],
                'text' => $_POST['text'],
                'done' => $_POST[false],
            ];
            
            $tasks[] = $newtask;
        }
    } elseif ($method === 'DELETE') {
        $tasks = json_decode($teamJson, true);
    $obj = json_decode(file_get_contents('php://input'));
    array_splice($team, $obj['id'] ,1);
    $newtask = json_encode($tasks, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $newtask);
}
    }


header('Content-Type: application/json');
echo $todolist;