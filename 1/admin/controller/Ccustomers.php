<?php
$domain = $_SERVER['HTTP_HOST'];

require_once 'model/Mcustomers.php';
$class=new customer();
switch ($action){
    case 'add':
        {
            if($_POST) {

                $data=$_POST['frm'];
                $folder="pro-".rand();
                $img=$class->uploader('img',"../public/customers/",$folder,"customer");
                $class->add_customer($data,$img);
            }
        }
        break;
    case 'list':
        {
            $list=$class->list_customer();
        }
        break;
    case 'delete':
        {
            $id=$_GET['id'];
            $class->delete_customer($id);
        }
        break;


    case 'edit':
        {
            $id=$_GET['id'];
            $result=$class->showedit_customer($id);
            if($_POST) {
                $data=$_POST['frm2'];
                $oldpic=$result['img'];
                $class->edit_customer($data,$id,'img',$oldpic);
            }
        }
        break;
}
if($action!='delete')
    require_once "view/$controller/$action.php";


