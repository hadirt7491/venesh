<?php
$domain = $_SERVER['HTTP_HOST'];
require_once '../public/config.php';
$controller=@$_GET['c']?$_GET['c']:'blog';
$action=@$_GET['a']?$_GET['a']:'list';
if(file_exists('controller/C'.$controller.'.php')){
    require_once 'controller/C'.$controller.'.php';
}
include_once 'view/layout/blog-footer.php';

?>

