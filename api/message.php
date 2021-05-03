<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/DbChat.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/Dialog.php';

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
$db = new DbChat();
$dialog = new Dialog();

$data = json_decode(file_get_contents('php://input'));

// is session & method post ?
if(isset($_SESSION["pseudo"]) && $method == 'POST'){
    $user = $_SESSION["id"];
    // get data from request
    $data = file_get_contents('php://input');
    // is message in data & not empty ?
    if(isset($data->message) && !empty($data->message)){
        $txt = $data->message;
        $dialog = new Dialog();
        $dialog->addMessage($db, $txt, $user);
    }
    else {
        echo json_encode(['message' => 'message vide']);
    }
}
else {
    echo json_encode(['message' => 'erreur']);
}
