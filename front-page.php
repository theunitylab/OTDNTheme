<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Unity_Lab_Theme
 */

get_header(); ?>
    <div class="small-12 medium-12 large-12 columns maincontent">
	   <div id="small-12 medium-12 large-12 columns primary" class="content-area">
		      <main id="main" class="site-main hero" role="main">
               <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Hero-Image.jpg" alt=""/>
		      </main><!-- #main -->
	    </div><!-- #primary -->
        <div class="small-12 medium-12 large-12 columns services">
            <div class="small-12 medium-12 larhe-12 columns service-container">
               <ul class="tabs" data-tabs id="example-tabs">
                  <li class="tabs-title service-tab is-active"><a href="#panel1" aria-selected="true">Services</a></li>
                  <li class="tabs-title"><a href="#panel2">Members</a></li>
                   <li class="tabs-title"><a href="#panel3">Leaders</a></li>
                </ul>
                <div class="tabs-content" data-tabs-content="example-tabs">
                  <div class="tabs-panel is-active" id="panel1">
                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
                  </div>
                  <div class="tabs-panel" id="panel2">
                    <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                  </div>
                  <div class="tabs-panel" id="panel3">
                    <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                  </div>                    
                </div>
            </div>       
        </div>
</div>
<?php

get_footer();
