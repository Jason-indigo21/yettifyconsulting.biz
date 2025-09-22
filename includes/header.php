<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yettify Consulting Group</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!--== All Magnific Popup CSS ==-->
    <link href="assets/css/magnific-popup.min.css" rel="stylesheet">
    <!--== All Animate CSS ==-->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!--== All FontAwesome CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!--== All Material Icons CSS ==-->
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet">
    <!--== All Helper CSS ==-->
    <link href="assets/css/helper.min.css" rel="stylesheet">
    <!--== All Revolution CSS ==-->
    <link href="assets/css/settings.css" rel="stylesheet">
    <!--== All Slicknav CSS ==-->
    <link href="assets/css/slicknav.min.css" rel="stylesheet">
    <!--== All Timeline CSS ==-->
    <link href="assets/css/timeline.css" rel="stylesheet">
    <!--== All Slick Slider CSS ==-->
    <link href="assets/css/slick.min.css" rel="stylesheet">
    <!--== All BootStrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--== Main Style CSS ==-->
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php include('./includes/content.php'); ?>
    <!--== Start Header Area Wrapper ==-->
    <header class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-3">
                    <!-- Start Logo Area -->
                    <div class="logo-area">
                        <a href="./"><img src="assets/images/logo-png.png" alt="Businex-Logo" style="width:250px;"></a>
                    </div>
                    <!-- End Logo Area -->
                </div>
                <div class="col-lg-4 mt-3mb-5">
                    <div class="row d-flex justify-content-start mb-3">
                        <div class="col-1"> <i class="fa fa-map-marker" aria-hidden="true" style="color:#1e3811; font-size:20px;"></i></div>
                        <div class="col-11 header-contact-text px-3">
                            AXA Tower 36 floor, Unit 5-6 Kuningan City Jl. Pr
                            Jakarta Selatan, Indonesia
                        </div>
                    </div>
                    <div class="row d-flex justify-content-start">
                        <div class="col-1"> <i class="fa fa-envelope" aria-hidden="true" style="color:#1e3811; font-size:20px"></i> </div>
                        <div class="col-11 header-contact-text px-3">
                            <a href="mailto:itservices@yettifyconsulting.biz">itservices@yettifyconsulting.biz</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 d-none d-lg-block mt-3 mb-4">
                    <!-- Start Navigation Area -->
                    <div class="navigation-area">
                        <ul class="main-menu nav">
                            <?php foreach ($navs as $nav):    ?>
                                <?php if (in_array($nav['link'], ['cookies-policy', 'privacy-policy'])) continue; ?>

                                <?php if ($nav['link'] === 'specialty-areas'): ?>
                                    <li class="has-submenu"><a href="./?page=specialty-areas&service=cybersecurity-services"><?= $nav['title'] ?></a>
                                        <ul class="submenu-nav">
                                            <?php foreach ($services as $service): ?>
                                                <li><a href="./?page=specialty-areas&service=<?= $service['link'] ?>"><?= $service['title'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                    <li class="has-submenu"><a href="./?page=<?= $nav['link'] ?>"><?= $nav['title'] ?></a>
                                    </li>
                            <?php endif;
                            endforeach; ?>

                        </ul>
                    </div>
                    <!-- End Navigation Area -->
                </div>

            </div>
        </div>
    </header>

    <?php if ($_REQUEST['page'] !== 'home'):
        foreach ($navs as $nav):
            if ($nav['link'] === $_REQUEST['page']):
    ?>
                <div class="page-header-area bg-img header-banner" data-bg="./assets/images/banner.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-8 m-auto text-center">
                                <div class="page-header-content-inner">
                                    <div class="page-header-content">
                                        <h2><?= $nav['title'] ?></span> </h2>
                                        <ul class="breadcrumb list-unstyled">
                                            <li><a href="./">Home </a></li>
                                            <li><span><?= $nav['title'] ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php endif;
        endforeach;
    endif; ?>