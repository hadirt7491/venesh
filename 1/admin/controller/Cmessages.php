<?php
$domain = $_SERVER['HTTP_HOST'];

    require_once 'model/Mmessages.php';
    $class=new message();
    $class=new message();
    $listmessages=$class->select_message();
    require_once "view/$controller/$action.php";


