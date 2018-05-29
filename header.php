<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title><?php wp_title(); ?></title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  
  
  
  <?php wp_head(); ?>

</head>

<body id="body" <?php body_class(); ?> >

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->

  <div class="colors-switcher">
    <a id="show-panel" class="hide-panel"><i class="tf-ion-settings"></i></a>        
    <ul class="colors-list">
        <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
        <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
        <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
        <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>
        
        <li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>
        <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>
        
    </ul>

</div> 

  

<!-- 
  Fixed Navigation
  ==================================== -->
  <header class="navigation navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <!-- responsive nav button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- /responsive nav button -->

        <!-- logo -->
        <a class="navbar-brand logo" href="<?php the_permalink(); ?>">
          <img class="logo-default" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" />
          <img class="logo-white" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="logo" />
        </a>
        <!-- /logo -->
      </div>

      <!-- main nav -->
      <nav class="collapse navbar-collapse navbar-right" >
        <!-- <ul id="nav" class="nav navbar-nav menu">
            <li class="current"><a data-scroll href="#body">Home</a></li>
            <li><a data-scroll href="#about">About Us</a></li>
            <li><a data-scroll href="#services">Services</a></li>
            <li><a data-scroll href="#skills">Skills</a></li>
            <li><a data-scroll href="#team">Team</a></li>
            <li><a data-scroll href="#portfolio">Portfolio</a></li>
            <li><a data-scroll href="#pricing">Pricing</a></li>
            <li><a data-scroll href="#blog">Blog</a></li>
            <li><a data-scroll href="#contact">Contact</a></li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="<?php the_permalink(); ?>">Homepage</a></li>
                  <li><a href="<?php the_permalink(); ?>">Homepage 2</a></li>
                  <li><a href="<?php the_permalink(); ?>">Onepage</a></li>
                  <li><a href="<?php the_permalink(); ?>">Onepage 2</a></li>
                  <li><a href="<?php the_permalink(); ?>">404 Page</a></li>
                  <li><a href="<?php the_permalink(); ?>">Blog Page</a></li>

               </ul>
            </li>
        </ul> -->

        <?php 
          wp_nav_menu([
            'theme_location'  => 'menu-2',
            'menu_class'      => 'nav navbar-nav menu'
          ]);
        ?>
    </nav>
      <!-- /main nav -->

    </div>
  </header>
  <!--
  End Fixed Navigation
  ==================================== -->


	<div id="content" class="site-content">



