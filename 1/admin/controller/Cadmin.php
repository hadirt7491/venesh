<?php
//session_start();
//require_once 'model/Madmin.php';
//$class = new admin();
//        if($_POST){
//            $data=$_POST['frm'];
//            $password=$data['password'];
//            $user=$class->select_admin($data['username']);
//            if($user['password']==$password){
//                $_SESSION['login']=$user['name'];
//                header("location:http://$domain/admin");
//            }
//
//}
//
//

require_once 'model/Madmin.php';

include '../vendor/autoload.php';
use \Firebase\JWT\JWT;
$domain = $_SERVER['HTTP_HOST'];
$res=0;
$class = new admin();
        if($_POST) {
            $data = $_POST['frm'];
            $password = $data['password'];
            $user = $class->select_admin($data['username']);
            if ($user['password'] == $password) {
                $secret_key = ".m.7491.m";
                $payload = array(
                    $data = array(
                        'name' => $user
                    )
                );
                $jwt = JWT::encode($payload, $secret_key);
                $class->setJ($jwt);

            }

        }

        $jwt=$class->getJ();


require_once 'login.php';
