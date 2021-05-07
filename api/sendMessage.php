<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/Dialog.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/dialogMana.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/DbChat.php';

$db = new DbChat();
$db = $db->connect();
$mana = new dialogMana($db);


// receive json from app.js
$data = json_decode(file_get_contents('php://input'), true);
if (isset($data)) {
    $text = $data['message'];
    $user = $data['user_fk'];
    $response = [
        'info' => "vous avez le message : " . $text . "de la part de : " . $user
    ];
    $ref = $mana->addMessage($text, $user);
    if(!$ref){
        $response = ['info' => "add message error"];
    }

}
else {
    $response = ['info' => "error json decode"];
}

echo json_encode($response);

exit;
