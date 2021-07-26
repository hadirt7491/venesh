<?php
    require_once 'model/Mmenu.php';
    $class=new menu();
$domain = $_SERVER['HTTP_HOST'];

switch ($action){
    case 'add':
    {
        if($_POST) {
            $data1 = $_POST['frm'];
            $class->addmenu($data1);
        }
    }
    break;
    case 'list':
        {
            $listPro='';
            $listmenu=$class->select_menu();
        }
        break;
    case 'delete':
        {
            $id=$_GET['id'];
            $class->delete_menu($id);
        }
        break;
    case 'edit':
        {
            $id=$_GET['id'];
            $result=$class->show_edit($id);
            if($_POST) {
                $data2 = $_POST['frm2'];
                $class->edit_menu($data2,$id);
            }
        }
        break;
}
    if($action!='delete')
    require_once "view/$controller/$action.php";


