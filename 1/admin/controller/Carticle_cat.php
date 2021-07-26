<?php
$domain = $_SERVER['HTTP_HOST'];

    require_once 'model/Marticle_cat.php';
    $class=new category();

switch ($action){
    case 'add':
    {
        if($_POST) {
            $data1 = $_POST['frm'];
            $class->addcat($data1);
        }
    }
    break;
    case 'list':
        {
            $listcat=$class->listcat();
        }
        break;
    case 'delete':
        {
            $id=$_GET['id'];
            $class->deletecat($id);
        }
        break;
    case 'edit':
        {
            $id=$_GET['id'];
            $result=$class->showeditcat($id);
            if($_POST) {
                $data2 = $_POST['frm2'];
                $class->editcat($data2,$id);
            }
        }
        break;
}
    if($action!='delete')
    require_once "view/$controller/$action.php";


