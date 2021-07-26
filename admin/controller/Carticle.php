<?php
$domain = $_SERVER['HTTP_HOST'];
require_once 'model/Marticle.php';
$class=new article();
$listcat=$class->listcat();
switch ($action){
    case 'add':
        {
            if($_POST) {
                $data=$_POST['frm'];
                $folder="article-".rand();
                $img=$class->uploader('img',"../public/articles/",$folder,"article");
                $class->setTitle($data['title']);
                $class->setDescription($_POST['editor1']);
                $class->setAuthor($data['author']);
                $class->setCreatedOn(date('Y-m-d H:i:s'));
                $class->setlistcat($data['cat']);
                $class->setTo($img);
                $class->save();
            }
        }
        break;
    case 'list':
        {
            $list=$class->select_article();
        }
        break;
    case 'delete':
        {
            $id=$_GET['id'];
            $class->delete_article($id);
        }
        break;

    case 'edit':
        {
            $id=$_GET['id'];
            $result=$class->showedit_article($id);
            if($_POST) {

                $data=$_POST['frm'];
                $oldpic=$result['img'];
                $class->setTitle($data['title']);
                $class->setDescription($_POST['editor1']);
                $class->setAuthor($data['author']);
                $class->setCreatedOn(date('Y-m-d H:i:s'));
                $class->setlistcat($data['cat']);
                $class->setOldpic($oldpic);
                $class->edit_article($id);


            }
        }
        break;
}
if($action!='delete')
    require_once "view/$controller/$action.php";


