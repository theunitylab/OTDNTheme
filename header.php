<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Unity_Lab_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'otdn-theme' ); ?></a>

	<header id="masthead" class="small-12 medium-12 large-12 columns site-header" role="banner">
      <div class="row">
		<div class="site-branding">
            <div class="small-12 medium-4 large-4 columns site-logo">
            <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/OTDN_Logo.png" height="171" width="497" alt="The Ohio Talent Development Network Logo" /></a>
            </div>
            <div class="small-12 medium-8 large-8 columns">
                <div class="small-12 medium-5 large-6 columns header-menus">
        
<div class="show-for-medium">
    <div class="row">
      <div class="large-12 columns">
        <nav>
									<?php
          wp_nav_menu(array(
											'container' => false,
											'menu' => __( 'Primary', 'textdomain' ),
											'menu_class' => 'dropdown menu',
											'theme_location' => 'primary',
											'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
											//Recommend setting this to false, but if you need a fallback...
											'fallback_cb' => 'lc_topbar_menu_fallback',
											'walker' => new lc_top_bar_menu_walker,
												));
											?>
        </nav>
      </div>
    </div>
  </div>
  <div class="row show-for-small-only mobile-nav-bar">
    <div class="small-10 columns clearfix mobile-menu-label"> Menu </div>
    <div class="small-2 columns"> <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      </span> </div>
  </div>

  <div id="responsive-menu" class="show-for-small-only">
    <ul class="vertical menu" data-drilldown data-parent-link="true">

					<?php 	wp_nav_menu(array(
													'container' => false,
													'menu' => __( 'Drill Menu', 'textdomain' ),
													'menu_class' => 'vertical menu',
													'theme_location' => 'mobile-primary',
													'menu_id' => 'mobile-primary-menu',
														//Recommend setting this to false, but if you need a fallback...
													'fallback_cb' => 'lc_drill_menu_fallback',
													'walker' => new lc_drill_menu_walker(),
												));
					?>

    </ul>
  </div>                
     </div>
            <div class="small-12 medium-3 large-3 columns search-div">
                  <!-- This should be similar to what is generated when using Wordpress searchform.php -->
                  <form role="search" method="get" class="search-form" action="">
                    <label>
                      <input type="search" placeholder="Search" name="s" class="float-right"/>
                    </label>
                  </form>    
            </div>    
            </div>    
            </div>
		</div><!-- .site-branding -->

		<!-- #site-navigation -->
      </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
