<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $deskperusahaan->judul_perusahaan?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assetsfront/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>assetsfront/apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsfront/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsfront/css/core.css">
    <!-- Template shortcodes/elements style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsfront/css/shortcode/shortcodes.css">
    <!-- Template main style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsfront/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsfront/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsfront/css/custom.css">


    <!-- Modernizr JS -->
    <script src="<?php echo base_url();?>assetsfront/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper fixed-newslatter">
        <!-- Start Header Style -->
        <header id="header" class="header">
            <div id="sticky-header-with-topbar" class="container-fluid hidden-xs sticky__header">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-12">
                        <div class="logo">
                                <a href="index.html"><img src="<?php echo base_url();?>assetsfront/images/logo/ramble.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="header__top">
                            <div class="header__top__left">
                                <p><span class="text-theme">Contact:</span><a href="#"><?php echo $telepon->telepon_perusahaan?></a></p>
                                <p class="hidden-sm"><span class="text-theme">Opening Hours:</span> Mon - Sat 8.00 - 18.00. Sunday CLOSED</p>
                            </div>
                            <div class="header__top__right">
                                <ul class="login__regester">
                                    <li><a class="modal-view button" href="#" data-toggle="modal" data-target="#loginform"><i class="zmdi zmdi-account"></i>Login</a></li>
                                    <li><a  class="modal-view button" href="#" data-toggle="modal" data-target="#registrationform"><i class="zmdi zmdi-account-add"></i>Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header__bottom">
                            <div class="mainmenu__area">
                                <nav class="mainmenu__nav">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="<?php echo base_url();?>assetsfront/index.html">home</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url();?>assetsfront/index-slider.html">home 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url();?>assetsfront/about-us.html">about</a></li>
                                        <li><a href="<?php echo base_url();?>assetsfront/service.html">services</a></li>
                                            <li><a href="<?php echo base_url();?>assetsfront/tour-details.html">tour </a></li>


                                        <li><a href="<?php echo base_url();?>assetsfront/gallery.html">gallery</a></li>
                                        <li><a href="<?php echo base_url();?>assetsfront/blog-left-sidebar.html">Blog </a></li>

                                        <li><a href="<?php echo base_url();?>assetsfront/contact-us.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2 hidden-sm">
                        <ul class="social__icon icon--position">
                            <li><a href="https://www.linkedin.com/"><i class="zmdi zmdi-linkedin"></i></a></li>
                            <li><a href="https://www.pinterest.com/"><i class="zmdi zmdi-pinterest"></i></a></li>
                            <li><a href="https://www.tumblr.com/"><i class="zmdi zmdi-tumblr"></i></a></li>
                            <li><a href="https://plus.google.com/"><i class="zmdi zmdi-google"></i></a></li>
                            <li><a href="https://www.facebook.com/"><i class="zmdi zmdi-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Mobile-menu-area start -->
            <div class="mobile-menu-area hidden-md hidden-lg hidden-sm">
                <div class="fluid-container mobile-menu-container">
                    <div class="mobile-logo"><a href="<?php echo base_url();?>assetsfront/index.html"><img src="<?php echo base_url();?>assetsfront/images/logo/ramble.png" alt="Mobile logo"></a></div>
                    <div class="mobile-menu clearfix">
                        <nav id="mobile_dropdown">
                            <ul>
                                <li><a href="<?php echo base_url();?>assetsfront/index.html">home</a></li>
                                <li><a href="<?php echo base_url();?>assetsfront/index-slider.html">home 2</a></li>
                                <li><a href="<?php echo base_url();?>assetsfront/about-us.html">about</a></li>
                                <li class="drop"><a href="<?php echo base_url();?>assetsfront/blog-details.html">blog</a>
                                <li><a href="<?php echo base_url();?>assetsfront/package-list.html">package list</a></li>
                                <li><a href="<?php echo base_url();?>assetsfront/service.html">services</a></li>
                                <li><a href="<?php echo base_url();?>assetsfront/package-grid.html">package grid</a></li>
                                <li><a href="<?php echo base_url();?>assetsfront/gallery.html">gallery</a></li>
                                <li><a href="<?php echo base_url();?>assetsfront/book-the-tour.html">book the tour</a></li>
                                <li><a href="<?php echo base_url();?>assetsfront/tour-details.html">tour details</a></li>
                                <li><a href="<?php echo base_url();?>assetsfront/contact-us.html">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Mobile-menu-area End -->
        </header>
