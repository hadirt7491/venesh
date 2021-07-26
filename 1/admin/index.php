<?php
//session_start();

include '../vendor/autoload.php';
use Firebase\JWT\JWT;


include_once 'view/layout/header.php';
require_once '../public/config.php';
include_once 'jdf.php';
    $controller=@$_GET['c']?$_GET['c']:'index';
    $action=@$_GET['a']?$_GET['a']:'index';
    if(file_exists('controller/C'.$controller.'.php')){
        require_once 'controller/C'.$controller.'.php';
    }
    include_once 'view/layout/footer.php';


$data = json_decode(file_get_contents("php://input"));
$secret_key = ".m.7491.m";
$jwt=isset($data->jwt) ? $data->jwt : "";

$decoded = JWT::decode($jwt,$secret_key,array('HS256'));
if(!isset($decoded)){
    header("location:login.php");
}

?>

