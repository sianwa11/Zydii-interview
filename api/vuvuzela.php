<?php
/**
 * TEST TO SEE IF VUVUZELA METHOD WORKS IN POSTMAN
*/

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


include_once '../config/Database.php';
include_once '../models/Calculator.php';

$database = new Database();
$db = $database->connect();

$calculator = new Calculator($db);
// Get raw posted data
$data = json_decode(file_get_contents("php://input"));

$calculator->a = $data->a;
$calculator->b = $data->b;
$calculator->operation = $data->operation;

$result = $calculator->vuvuzela(
    $calculator->a,
    $calculator->b,
    $calculator->operation
);


if($result > 0)
{
    //data array
    $data = array();
    $data['result'] = array();

    array_push($data['result'], $result);
    echo json_encode($data);
} else {

    echo json_encode(array('message' => 'Result was 0'));
}

