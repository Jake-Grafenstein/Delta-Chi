<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php if (is_post_type_archive( 'brother' )) : ?>
	<link rel="stylesheet" href="/wp-content/themes/Delta-Chi-Theme/js/jquery-ui.css">
  	<script src="/wp-content/themes/Delta-Chi-Theme/js/jquery-2.1.4.min.js"></script>
  	<script src="/wp-content/themes/Delta-Chi-Theme/js/jquery-ui.js"></script>
  	<script>
  		$(function() { 
  			$( document ).tooltip();
  			$('*').tooltip();
  			$('#menu-main *[title]').tooltip('disable');
  			$('#logo *[title]').tooltip('disable');
  		});
  	</script>
<?php endif; ?>

<?php wp_head(); ?>
<?php if ( !is_user_logged_in() ){ ?>
			<style>
	            #wpadminbar{ display:none; }
	            html {margin-top:0 !important;}
	            header {margin-top:0 !important;}
            </style>
		<?php } ?>
<?php if (is_post_type_archive( 'tribe_events' ) || is_singular( 'tribe_events' )) : ?>
			<style type="text/css">
				.col-md-8 {
					width:100% !important;
				}
			</style>
<?php endif; ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="site-navigation-inner col-sm-12">
						<div class="navbar-header">
							<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<?php if( get_header_image() != '' ) : ?>

							<div id="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed ?>

							<?php if( !get_header_image() ) : ?>

							<div id="logo">
								<span class="logo-image"><img src="/wp-content/uploads/2015/07/favicon.png" alt="Delta Chi Shield" /></span>
								<span class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed (again) ?>

						</div>
						<?php sparkling_header_menu(); // main navigation ?>
					</div>
				</div>
			</div>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div id="header-image" class="top-section">
			<?php sparkling_call_for_action(); ?>
		</div>

		<div class="container main-content-area">
			<div class="row">
				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">