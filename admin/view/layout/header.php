<?php

include '../vendor/autoload.php';

use \Firebase\JWT\JWT;

$domain = $_SERVER['HTTP_HOST'];

$jwt=$_SESSION['jwt'];



$secret_key='hadirt7491';
if($jwt){

    try{
        $decoded = JWT::decode($jwt,$secret_key,array('HS256'));
        http_response_code(200);

    }
    catch(Exception $e){
        http_response_code(401);

        // show error message
        echo json_encode(array(
            "message" => "Access denied.",
            "error" => $e->getMessage()
        ));
    }





}else{
    header('HTTP/1.0 401 Unauthorized');
    echo json_encode(array(
        "message" => "شما دسترسی به این صفحه ندارید"
    ));

    die();
}

$role=$decoded[0]->role;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="../../../public/admin/ckeditor/ckeditor.js"></script>
     <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../../../public/admin/img/favicon.html">

    <title>cms</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../public/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../../public/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="../../../public/admin/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="../../../public/admin/css/style.css" rel="stylesheet">
    <link href="../../../public/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="../../../public/admin/js/html5shiv.js"></script>
    <script src="../../../public/admin/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo">پنل مدیریت<span></span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge bg-success">6</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">شما 6 برنامه در دست کار دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">پنل مدیریت</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">بروزرسانی دیتابیس</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">برنامه نویسی  IPhone</div>
                                    <div class="percent">87%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                        <span class="sr-only">87% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">برنامه موبایل</div>
                                    <div class="percent">33%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                        <span class="sr-only">33% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">پروفایل v1.3</div>
                                    <div class="percent">45%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">برنامه های بیشتر</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-alt"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">شما 5 پیام جدید دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
                                <span class="subject">
                                    <span class="from"><?php
                                        echo $_SESSION['login'];
                                        ?></span>
                                    <span class="time">همین حالا</span>
                                    </span>
                                <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="img/avatar-mini2.jpg"></span>
                                <span class="subject">
                                    <span class="from">ایمان مدائنی</span>
                                    <span class="time">10 دقیقه قبل</span>
                                    </span>
                                <span class="message">
                                     سلام، چطوری شما؟
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="img/avatar-mini3.jpg"></span>
                                <span class="subject">
                                    <span class="from">صبا ذاکر</span>
                                    <span class="time">3 ساعت قبل</span>
                                    </span>
                                <span class="message">
                                        چه پنل مدیریتی فوق العاده ایی
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="img/avatar-mini4.jpg"></span>
                                <span class="subject">
                                    <span class="from">مسعود شریفی</span>
                                    <span class="time">همین حالا</span>
                                    </span>
                                <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://<?php echo $domain; ?>/admin/?c=messages&a=list">نمایش تمامی پیام ها</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-alt"></i>
                        <span class="badge bg-warning">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">شما 7 اعلام جدید دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon-bolt"></i></span>
                                سرور شماره 3 توقف کرده
                                <span class="small italic">34 دقیقه قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon-bell"></i></span>
                                سرور شماره 4 بارگزاری نمی شود
                                <span class="small italic">1 ساعت قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon-bolt"></i></span>
                                پنل مدیریت 24% پیشرفت داشته است
                                <span class="small italic">4 ساعت قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="icon-plus"></i></span>
                                ثبت نام کاربر جدید
                                <span class="small italic">همین حالا</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                برنامه پیام خطا دارد
                                <span class="small italic">10 دقیقه قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">نمایش تمامی اعلام ها</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="img/avatar1_small.jpg">
                        <span class="username"><?php
                            echo $_SESSION['login'];
                            ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                        <li><a href="#"><i class="icon-cog"></i> تنظیمات</a></li>
                        <li><a href="#"><i class="icon-bell-alt"></i> اعلام ها</a></li>
                        <li><a href="login.php"><i class="icon-key"></i> خروج</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="http://<?php echo $domain; ?>/admin/">
                        <i class="icon-dashboard"></i>
                        <span>صفحه اصلی</span>
                    </a>
                </li>

                <?php
                if($role==0){
                ?>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span> اعضا</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=member&a=list">لیست اعضا</a></li>
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=member&a=add">افزودن اعضا جدید</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>مدیریت منو ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=menu&a=list">لیست منو ها</a></li>
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=menu&a=add">افزودن منو جدید</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>معرفی سرویس ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=services&a=list">لیست سرویس ها</a></li>
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=services&a=add">افزودن سرویس جدید</a></li>
                    </ul>
                </li>


                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-book"></i>
                            <span>test</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=test&a=list">sub</a></li>
                            <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=test&a=add">اsub</a></li>
                        </ul>
                    </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span> دسته بندی محصولات</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=product_cat&a=list">لیست دسته بندی ها</a></li>
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=product_cat&a=add">افزودن دسته بندی جدید</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span> محصولات</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=product&a=list">لیست محصولات</a></li>
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=product&a=add">افزودن محصول جدید</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>  سرویس ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=service_flow&a=list">لیست سرویس فلو ها</a></li>
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=service_flow&a=add">افزودن سرویس فلو جدید</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span> همکاران</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=customers&a=list">لیست همکاران</a></li>
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=customers&a=add">افزودن همکار جدید</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span> برگه ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=pages&a=list">لیست برگه ها</a></li>
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=pages&a=add">افزودن برگه جدید</a></li>
                    </ul>
                </li>
                <?php
                }
                else
                ?>


                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>مدیریت مقالات</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=article&a=list">لیست مقاله ها</a></li>
                        <li><a class="" href="http://<?php echo $domain; ?>/admin/?c=article&a=add">افزودن مقاله جدید</a></li>
                    </ul>
                </li>



                <li>
                    <a class="" href="login.php">
                        <i class="icon-user"></i>
                        <span>صفحه ورود به سایت</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>