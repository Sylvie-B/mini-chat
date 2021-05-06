<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/Dialog.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/dialogMana.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/DbChat.php';

$db = new DbChat();
$db = $db->connect();

