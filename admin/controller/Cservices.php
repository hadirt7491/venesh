<?php
$domain = $_SERVER['HTTP_HOST'];

    require_once 'model/Mservices.php';
    $class=new service();

switch ($action){
    case 'add':
    {
        if($_POST) {
            $data=$_POST['frm'];
            $class->addservice($data);
        }
    }
    break;
    case 'list':
        {
            $listcat=$class->listservice();
        }
        break;
    case 'delete':
        {
            $id=$_GET['id'];
            $class->deleteser($id);
        }
        break;

    case 'edit':
        {
            $id=$_GET['id'];
            $result=$class->showeditser($id);
            var_dump($result);
            die();

            if($_POST) {
                $data=$_POST['frm'];
                $class->editser($data,$id);
            }
        }
        break;
}
    if($action!='delete')
    require_once "view/$controller/$action.php";


