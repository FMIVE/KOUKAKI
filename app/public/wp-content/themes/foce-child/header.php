<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	<?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>
    <div id="menu" class="menu">    
        <h1 class="titreMenu">Fleurs d'oranger & chats errants</h1>
            <div id="toggleBtn" class="button">
                <span class="burger-icon">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </span>
            </div>    
    </div>
    <div id="newSidenav" class="sidenav">
        <a id="closeBtn" href="#" class="close"></a>
        <div class="petitLogo">
            <img src="/wp-content/themes/foce-child/images/logo-petit.png " alt="">
        </div>
        <ul>
            <li><a href="#story"><span class="text">Histoire</span></a></li>
            <li><a href="#characters"><span class="text">Personnages</span></a></li>
            <li><a href="#place"> <span class="text">Lieu</span></a></li>
            <li><a href="#studio"><span class="text">Studio Koukaki</span></a></li>
        </ul>                       
        <img src="/wp-content/themes/foce-child/images/Orchid.png " class="menuImg1" alt="">
        <img src="/wp-content/themes/foce-child/images/Sunflower.png " class="menuImg2" alt="">
        <img src="/wp-content/themes/foce-child/images/cat.png " class="menuImg3" alt="">
        <img src="/wp-content/themes/foce-child/images/Flower.png " class="menuImg4" alt="">
        <img src="/wp-content/themes/foce-child/images/RandomFlowerMenu.png " class="menuImg5" alt="">
        <img src="/wp-content/themes/foce-child/images/cat2.png " class="menuImg6" alt="">
        <img src="/wp-content/themes/foce-child/images/Cat1.png " class="menuImg7" alt="">
        <img src="/wp-content/themes/foce-child/images/hibiscusFooterMenu.png " class="menuImg8" alt="">
        <P class="legend">Studio Koukaki</p>              
    </div>                  
</div>
		