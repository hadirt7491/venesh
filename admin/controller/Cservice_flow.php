<?php
$domain = $_SERVER['HTTP_HOST'];

    require_once 'model/Mservice_flow.php';
    $class=new serviceflow();
switch ($action){
    case 'add':
    {

        if($_POST) {
            $data=$_POST['frm'];
            $folder="se-".rand();
            $img=$class->uploader('img',"../public/services/",$folder,"service");
            $class->addflow($data,$img);
        }
    }
    break;

    case 'list':
        {
            $listcat=$class->listServiceFlow();

        }
        break;
    case 'delete':
        {
            $id=$_GET['id'];
            $class->deleteServiceFlow($id);
        }
        break;


    case 'edit':
        {
            $id=$_GET['id'];
            $result=$class->showeditser($id);
            $oldpic=$result['icon'];
            if($_POST) {
                $data=$_POST['frm2'];
                $class->editService($data,$id,'img',$oldpic);
            }
        }
        break;
}
    if($action!='delete')
    require_once "view/$controller/$action.php";


