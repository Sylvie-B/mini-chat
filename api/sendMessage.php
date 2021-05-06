<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/Dialog.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/dialogMana.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/DbChat.php';

$db = new DbChat();
$db->connect();
$mana = new dialogMana($db);

//

// receive json from app.js
$data = json_decode(file_get_contents('php://input'));
if(isset($data->message)){
    $new = $mana->addMessage($data->message, null);
    if(!$new){
        echo 'une erreur est survenue';
    }
}