<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package swilder
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- single post js -->
<?php 
  if( is_single() and $singlePostJs = get_post_meta($post->ID, 'single-post-js', true) )
   echo $singlePostJs;
?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php if(is_home()): ?>
	<div class="homeBanner">
		<div class="banner-left">
			<div class="headName"><h1>Zack Lee</h1></div>
			    <div class="description">
		  							<h2>Im a sound designer and developer working on making delicious sound and vision and this is my portfolio.</h2>
								</div>
					<div class="socialMedia">
							<div id="gitHub"><a href="https://github.com/emoora" target="_blank"></a></div>
							<div id="soundCloud"><a href="https://soundcloud.com/emoora" target="_blank"></a></div>
							<div id="eMail"><a href="mailto:eggzackalee@gmail.com"></a></div>
								
					</div>
		</div><!-- close banner-left-->
		<div class="banner-right">
			<div class="banner-right-r"></div>
			<div class="banner-right-l"></div>
		</div><!--close banner-right-->
	</div><!--close home-banner-->		
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
			<div id="page" class="hfeed site">
             <div id="content" class="site-content container_12">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'swilder' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'swilder' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	
