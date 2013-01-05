<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<html>
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
  <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/images/bookmark-icon.png" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" title="stylesheet" type="text/css" media="screen" charset="utf-8">
  <!--[if lt IE 9]><link rel="stylesheet" href="ie/ie.css" title="stylesheet" type="text/css" media="screen" charset="utf-8"><![endif]-->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.js" charset="utf-8"></script>
  <!--[if lt IE 9]><script src="<?php bloginfo('template_url'); ?>/js/html5.js" charset="utf-8"></script><![endif]-->
  <script src="<?php bloginfo('template_url'); ?>/js/prefixfree.min.js" charset="utf-8"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/scrollto.js" charset="utf-8"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/custom.js" charset="utf-8"></script>
  <?php wp_head(); ?>
  <head>
    <title><?php
        //Title based on page.
        global $page, $paged;
        wp_title( '|', true, 'right' );
        // Add the blog name.
        bloginfo( 'name' );
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        	echo " | $site_description";
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
        	echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) ); 
      ?></title>
  </head>
  <body>
    <div class="page">
      <header class="wrapper masthead">
        <hgroup class="branding">
          <h1><?php bloginfo('name'); ?></h1>
          <h2><?php bloginfo('description'); ?></h2>
          <a href="<?php echo home_url( '/' ); ?>" class="logo">
            <img src="<?php bloginfo('template_url'); ?>/images/dnc_logo.png" />
          </a><!-- /.logo -->
        </hgroup><!-- /.branding -->
        <button class="shownav">Navigation</button>
        <nav class="access">
          <ul class="menu-left">
            <li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
            <li><a href="#" id="work">Work</a></li>
          </ul>
          <ul class="menu-right">
            <li><a href="#" id="about">About</a></li>
            <li><a href="#" id="contact">Contact</a></li>
          </ul>
        </nav>
        <?php if ( is_front_page() || is_home() ): ?>
          <div class="copy content">
            <h1>The web is a beautiful place, I'm just doing my best to help keep it that way.</h1>
            <h2>And I do it using HTML5 and CSS3 to serve sparklingly responsive layouts to the masses.</h2>
            <button class="button orange" id="chat">Let&rsquo;s Chat.</button>
            <div class="graphic">
              <img src="<?php bloginfo('template_url'); ?>/images/cannister.png" />
            </div><!-- /.graphic -->
          </div><!-- /.copy -->
        <?php endif; ?>
      </header><!-- /header.wrapper -->