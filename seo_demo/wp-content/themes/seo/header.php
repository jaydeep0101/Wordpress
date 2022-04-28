<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<!-- 
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
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
        wp_head();
        ?>
</head>
<body>
	<!-- header start -->
    <header>
            <div class="header sticky-bar ">
                <div class="container p-0">
                <div class="header__inner">
                    <?php $header_image =  get_header_image(); ?>
                    <div class="header__logo">
                        <a  class="header__logo--img" href="<?php echo site_url();?>"><img src="<?php echo $header_image; ?>" alt="logo"></a>
                    </div>
                    <div class="header__menu">
                        <div>
                                <?php
                                    wp_nav_menu(array('theme_location'=> 'Primary'))
                                ?>
                        </div>
                    </div>
                    <div class="toggle-menu">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/sidebar.png" alt="sidebar">
                    </div>
                    <div class="hedder__lets--btn ">
                        <a href="#" class="common__btn">Let's Talk</a>
                    </div>
                </div>
            </div>
            </div>
        </header>
        <!-- Header end -->
        <header>
            <div class="header second__header">
                <div class="container p-0">
                <div class="header__inner">
                    <?php $header_image =  get_header_image(); ?>
                    <div class="header__logo">
                        <a  class="header__logo--img" href="<?php echo site_url();?>"><img src="<?php echo $header_image; ?>" alt="logo"></a>
                    </div>
                    <div class="header__menu">
                        <div>
                                <?php
                                    wp_nav_menu(array('theme_location'=> 'Primary'))
                                ?>
                        </div>
                    </div>
                    <div class="toggle-menu">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/sidebar.png" alt="sidebar">
                    </div>
                    <div class="hedder__lets--btn ">
                        <a href="#" class="common__btn">Let's Talk</a>
                    </div>
                </div>
            </div>
            </div>
        </header>


 <!-- Sidebar start -->
<div class="sidebar">
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="index.html"><img src="<?php echo $header_image; ?>"></a>
        </div>
        <div class="sidebar__menu">
            <div>
                <?php
                    wp_nav_menu(array('theme_location'=> 'Primary'))
                ?>
            </div>
        </div>
    </div>
</div>
<div class="close-sidebar"></div>
<!-- Sidebar end -->

