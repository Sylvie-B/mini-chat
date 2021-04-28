<?php

require $_SERVER['DOCUMENT_ROOT'] . '/DbChat.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Classes/User.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Classes/Dialog.php';

$method = $_SERVER['REQUEST_METHOD'];

switch($method) {
    case 'GET' :
        if(isset ($_GET['id'])){

        }
}