<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Businex :: Corporate Business Bootstrap 5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

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

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php include('./includes/content.php');?>
<!--== Start Header Area Wrapper ==-->
<header class="header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-5 col-lg-2">
                <!-- Start Logo Area -->
                <div class="logo-area">
                    <a href="index.html"><img src="assets/images/logo-png.png" alt="Businex-Logo" ></a>
                </div>
                <!-- End Logo Area -->
            </div>

            <div class="col-lg-12 d-none d-lg-block">
                <!-- Start Navigation Area -->
                <div class="navigation-area">
                    <ul class="main-menu nav">
                        <?php foreach ($navs as $nav):    ?>
                            <?php if(in_array($nav['link'], ['cookies-policy','privacy-policy'])) continue;?>
                              <li class="has-submenu"><a href="./?page=<?= $nav['link'] ?>"><?= $nav['title'] ?></a>                         
                        </li>                        
                        
                        <?php endforeach; ?>
                      
                    </ul>
                </div>
                <!-- End Navigation Area -->
            </div>

        </div>
    </div>
</header>