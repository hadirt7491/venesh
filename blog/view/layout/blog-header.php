<!DOCTYPE html>
<html lang="en">
<head>

    <title>venesh</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../../public/default/css/index/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../public/default/css/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/default/css/index/css/jquery-ui.css">
    <link rel="stylesheet" href="../../public/default/css/index/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../public/default/css/index/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../public/default/css/index/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../public/default/css/index/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../public/default/css/index/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../public/default/css/index/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../public/default/css/index/css/aos.css">
    <link rel="stylesheet" href="../../public/default/css/index/css/style.css">
    <link rel="stylesheet" href="../../public/default/css/index/fonts/css/styleTest.css">
    <link rel="stylesheet" href="../../public/default/font/css/styleTest.css">


</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <div class="left" >
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                            <li class="cta"><a href="http://<?php echo $domain;?>/#contact-section" class="nav-link"><span class="border bg-danger rounded text-white border-danger">ارتباط با ما</span></a></li>
                        </ul>
                    </nav>
                    <a href="#" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
                </div>
                <div class="middle clearfix">
                    <nav class="clearfix site-navigation position-relative text-right" role="navigation">
                        <ul class="clearfix site-menu main-menu js-clone-nav mr-auto d-none d-xl-block">
                            <?php
                            foreach ($listmenudefault as $val):
                                ?>
                                <li><a href="<?php
                                    echo $val['url'];
                                    ?>"class="nav-link clearfix">
                                        <?php
                                        echo $val['title'];
                                        ?>

                                    </a></li>
                            <?php
                            endforeach;
                            ?>


                        </ul>
                    </nav>
                </div>
                <div class="site-logo">
                    <p>ونش</p>
                    <img class="img-logo right" src="../../public/default/img/icon_app_logo.png" height="40px" width="40px">
                </div>



            </div>
        </div>

    </header>