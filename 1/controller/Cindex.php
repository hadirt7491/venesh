<?php
    require_once 'model/Mindex.php';
    $class = new main();
    $listmenudefault=$class->menu_list();
    include_once 'view/layout/header.php';
    $listservice=$class->listservice();
    $listproadmin=$class->listproadmin();
    $listwork_flow=$class->listServiceFlow();
    $customers=$class->list_customer();
    $menu=$class->menu_list();
    require_once 'view/index/index.php';
