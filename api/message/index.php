<?php

require $_SERVER['DOCUMENT_ROOT'] . '/DbChat.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Classes/User.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Classes/Dialog.php';

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
$dialog = new Dialog();

$data = json_decode(file_get_contents('php://input'));
if(isset($data->txt)){

}