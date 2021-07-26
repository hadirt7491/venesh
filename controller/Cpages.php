<?php

require_once 'model/Mpages.php';
$class=new page();
$listmenudefault=$class->menu_list();
include_once 'view/layout/blog-header.php';
$customers=$class->list_customer();
$page=@$_GET['pages']?$_GET['pages']:'404';
$container=$class->select_page($page);
$menu=$class->menu_list();
$listproadmin=$class->listproadmin();

require_once "view/page/page.php";
