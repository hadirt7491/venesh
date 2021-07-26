<?php
$domain = $_SERVER['HTTP_HOST'];

    require_once 'model/Mproduct.php';
    $class=new product();
switch ($action){
    case 'add':
    {
        $procat=$class->procat();
        if($_POST) {
            $data=$_POST['frm'];
            $folder="pro-".rand();
            $img=$class->uploader('img',"../public/products/",$folder,"product");
            $class->addpro($data,$img);
        }
    }
    break;
    case 'list':
        {
            $listPro=$class->listproadmin();
        }
        break;
    case 'delete':
        {
            $id=$_GET['id'];
            $class->deletepro($id);
        }
        break;


    case 'edit':
        {
            $id=$_GET['id'];
            $result=$class->showeditpro($id);
            if($_POST) {
                $data=$_POST['frm2'];
                $oldpic=$result['img'];
                $class->editpro($data,$id,'img',$oldpic);
            }
        }
        break;
}
    if($action!='delete')
    require_once "view/$controller/$action.php";


