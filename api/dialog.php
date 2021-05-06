<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/Dialog.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/dialogMana.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/DbChat.php';

$db = new DbChat();
$db = $db->connect();
$manager = new dialogMana($db);
$allDialog = $manager->getDialog();

$response = [];
foreach ($allDialog as $message){
    $response[] = [
        'id_message' => $message->getIdMessage(),
        'message' => $message->getMessage(),
        'user_fk' => $message->getUserFk()
    ];
}

echo json_encode($response);

exit;
