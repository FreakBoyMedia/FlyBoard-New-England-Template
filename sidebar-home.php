<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>  
	<?php responsive_widgets_before(); // above widgets container hook ?>
    <div id="widgets" class="home-widgets">
        <div class="grid col-300">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('home-widget-1')) : ?>
            <div class="widget-wrapper">
            
            <a href="/book"><div class="widget-title-home"><h3><?php 
            $page_id = 33;
            $page_data = get_page( $page_id );
            echo $page_data->post_title; ?></h3></div></a>
                <div class="textwidget"><?php 
            $page_id = 33;
            $page_data = get_page( $page_id );
            echo $page_data->post_excerpt; ?></div>
            
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-1 ?>

        <?php responsive_widgets_end(); // responsive after widgets hook ?>
        </div><!-- end of .col-300 -->

        <div class="grid col-300">
        <?php responsive_widgets(); // responsive above widgets hook ?>
            
			<?php if (!dynamic_sidebar('home-widget-2')) : ?>
            <div class="widget-wrapper">
            
                <a href="/learn-flyboard"><div class="widget-title-home"><h3><?php 
            $page_id = 40;
            $page_data = get_page( $page_id );
            echo $page_data->post_title; ?></h3></div></a>
                <div class="textwidget"><?php 
            $page_id = 40;
            $page_data = get_page( $page_id );
            echo $page_data->post_excerpt; ?></div>
            
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-2 ?>
            
        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-300 -->

        <div class="grid col-300 fit">
        <?php responsive_widgets(); // above widgets hook ?>
            
			<?php if (!dynamic_sidebar('home-widget-3')) : ?>
            <div class="widget-wrapper">
            
                <a href="/contact-flyboard-new-england"><div class="widget-title-home"><h3><?php 
            $page_id = 37;
            $page_data = get_page( $page_id );
            echo $page_data->post_title; ?></h3></div></a>
                <div class="textwidget"><?php 
            $page_id = 37;
            $page_data = get_page( $page_id );
            echo $page_data->post_excerpt; ?></div>
        
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-3 ?>
            
        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-300 fit -->
    </div><!-- end of #widgets -->
	<?php responsive_widgets_after(); // after widgets container hook ?>