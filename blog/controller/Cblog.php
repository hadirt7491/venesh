<?php
require_once 'model/Mblog.php';
$class=new blog();
$listmenudefault=$class->menu_list();
include_once 'view/layout/blog-header.php';
$menu=$class->menu_list();
$page=@$_GET['page']?$_GET['page']:'1';
$customers=$class->list_customer();
$listproadmin=$class->listproadmin();

$id=@$_GET['id']?$_GET['id']:'-1';

$posts=$class->select_posts($id,$page);

if($id=='-1')
{
    $posts=$class->select_AllPosts($page);
    $c=$class->count();
    $count=$c[0]['COUNT(id)'];


}
else
{
    $c=$class->countId($id);
    $count=$c[0]['COUNT(id)'];

}
$article=$class->select_article($id);

switch ($action){

    case 'list':
        {
            $listCat=$class->select_articleCat();
            $lastArticles=$class->select_last();

        }
        break;

}
$s=@$_GET['search']?$_GET['search']:'0';
if($s!=0){
    $posts=$class->select_search($page,$s);

}

if($action!='delete')
    require_once "view/$controller/$action.php";


