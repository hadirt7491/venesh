<?php
$domain = $_SERVER['HTTP_HOST'];
session_start();
require_once 'model/Madmin.php';
include '../vendor/autoload.php';
use \Firebase\JWT\JWT;


$class = new admin();
        if($_POST){
            $data=$_POST['frm'];
            $password= $data['password'];
            $user=$class->select_admin($data['username']);
            $payload=array();
            if($user['password']==$password){
                $_SESSION['login']=$user['name'];
                $secret_key = "hadirt7491";
                $payload = array(
                    $data = array(
                        'name' => $user['name'],
                        'role' => $user['role']
                    )
                );

                $jwt = JWT::encode($payload, $secret_key);
                $_SESSION['jwt']=$jwt;

                header("location:http://$domain/admin");
            }

}
require_once 'login.php';
