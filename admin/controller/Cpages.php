<?php
$domain = $_SERVER['HTTP_HOST'];

    require_once 'model/Mpages.php';
    $class=new page();
    switch ($action){
    case 'add':
    {
        if($_POST) {
            $data1 = $_POST['frm'];
            $class->addPage($data1);
        }
    }
    break;
    case 'list':
        {
            $listpages=$class->select_pages();
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
                $data2 = $_POST['frm'];
                $class->edit_menu($data2,$id);
            }
        }
        break;
}
    if($action!='delete')
    require_once "view/$controller/$action.php";


