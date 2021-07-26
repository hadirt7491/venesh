<?php
$domain = $_SERVER['HTTP_HOST'];
require_once 'public/config.php';

if(file_exists('controller/Cpages.php')){
    require_once 'controller/Cpages.php';
}

include_once 'view/layout/footer.php';

?>

