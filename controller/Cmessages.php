<?php
    require_once 'model/Mmessages.php';
    $class=new message();
    if($_POST) {
        $data1 = $_POST['name'];
        echo $data1;
        $class->addmessage($data1);
        header('location:http://<?php echo $domain ?>/');

    }
    require_once "index.php";


