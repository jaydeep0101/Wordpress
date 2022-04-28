
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="App Multiconcept Landing Page, android, ios app website template, Mobile app landing page template">
    <meta name="keywords" content="beautiful, app, template, mobile, responsive, application, website, html5, promote, parallax, effect, creative, unique, layout, features, cross, browser, compatible">
    <meta name="author" content="Qrolic Technologies">
    <title>
        <?php
            bloginfo('name');
            wp_title();
            if(is_front_page()){
                echo ' | '; 
                bloginfo('description');
            }
        ?>

    </title>

    <!-- Favicon icon -->
    <!-- <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png"> -->
    <!-- Bootstrap css -->
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" media="screen" rel="stylesheet">
    <!--font Awesome css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/all.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/swiper-bundle.min.css">
    <!-- Fancybox css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.fancybox.css">
    <!-- Main custom css -->
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" media="screen" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <div class="wrapper">

        <!-- header start -->
        <header>
            <div class="header">
                <div class="container p-0">
                <div class="header__inner">
                    <div class="header__mobile">
                        <span></span>
                    </div>
                    <!-- <?php $header_image =  get_header_image(); ?> -->
                    <div class="header__logo">
                        <a  class="header__logo--img" href="<?php echo site_url();?>"><img src="<?php echo get_header_image(); ?>" alt="logo"></a>
                    </div>
                    
                    <div class="header__menu">
                        <div>
                            <!-- <ul>
                                <li><a href="#home">Booking</a></li>
                                <li><a href="#service">Facilities</a></li>
                                <li><a href="#feature">About Us</a></li>
                                <li><a href="#map">Location</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li><a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="knowledge-base.html">Knowledge Base</a></li>
                                        <li><a href="knowledge-base-single.html">Knowledge Base Single</a></li>
                                        <li><a href="blog.html">Blog Post</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul> -->


							<?php 
                            wp_nav_menu(
								array('theme_location' => 'Primary')
							)  
							?>




                        </div>
                    </div>
                   
                    <div class="toggle-menu">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/sidebar.png" alt="sidebar">
                    </div>
                </div>
            </div>
            </div>
        </header>
        <!-- Header end -->

        <!-- Sidebar start -->
        <div class="sidebar">
            <div class="sidebar__inner">
                <div class="sidebar__logo">
                    <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png"></a>
                </div>
                <div class="sidebar__menu">
                    <div>
                        <ul>
                            <li><a href="index.html#home">Booking</a></li>
                            <li><a href="index.html#service">Facilities</a></li>
                            <li><a href="index.html#feature">About Us</a></li>
                            <li><a href="index.html#map">Location</a></li>
                            <li><a href="index.html#contact">Contact</a></li>
                            <li><a href="#">pages</a>
                                <ul class="sub-menu">
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="knowledge-base.html">Knowledge Base</a></li>
                                    <li><a href="knowledge-base-single.html">Knowledge Base Single</a></li>
                                    <li><a href="blog.html">Blog Post</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="close-sidebar"></div>
        <!-- Sidebar end -->
