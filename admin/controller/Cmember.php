<?php
$domain = $_SERVER['HTTP_HOST'];

    require_once 'model/Mmember.php';
    $class=new member();

switch ($action){
    case 'add':
    {
        if($_POST) {
            $data1 = $_POST['frm'];
            $class->addmember($data1);
        }
    }
    break;
    case 'list':
        {
            $listmenu=$class->listmember();
        }
        break;
    case 'delete':
        {
            $id=$_GET['id'];
            $class->deletmember($id);
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


