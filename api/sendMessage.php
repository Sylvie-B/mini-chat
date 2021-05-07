<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/Dialog.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/dialogMana.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/DbChat.php';

$db = new DbChat();
$db = $db->connect();
$mana = new dialogMana($db);

echo 'ici';
// receive json from app.js
$data = json_decode(file_get_contents('php://input'), true);
$response[] = "";
if(isset($data->message, $data->user_fk)){
    $newMessage = $mana->addMessage($data->message, $data->user_fk);
    if(!$newMessage){
        $response = [
            'info' => 'error'
        ];
    }
    else{
        $response = [
            'info' => 'new message'
        ];
    }

}
echo json_encode($response);
exit;
