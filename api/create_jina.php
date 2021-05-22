<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../config/Database.php';
include_once '../models/Input.php';

$database = new Database();
$db = $database->connect();

$input = new Input($db);

$data = json_decode(file_get_contents("php://input"));

$input->jina = $data->jina;

if($input->create()) {
    echo json_encode(
        array('message' => 'Input created')
    );
} else {
    echo json_encode(
        array('message' => 'Post Not Created')
    );
}