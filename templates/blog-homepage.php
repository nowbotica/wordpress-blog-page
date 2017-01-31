<?php
/**
 * The main template file.
 *
 * @package Snowbotica Wordpress Blog
 */
?>
<?php get_header(); ?>
	<?php $opts = get_option( 'snwb_settings' ); ?>
	<?php //get_template_part( 'parts/blog', 'menu'); ?>
	<?php get_template_part( 'parts/layout', 'full-open' ); ?>
	<?php //get_template_part( 'parts/layout', 'sidebar-open' ); ?>
		<?php if ( $opts ['snwb_show_lp_recent_slides'] ) :?>
			<?php include('parts/blog-recent-slides.php');?>
		<?php endif; ?>
		<?php if ( $opts ['snwb_show_lp_cat_grid'] ) :?>
			<?php include('parts/blog-cat-grid.php');?>
		<?php endif; ?>
		
	<?php //get_template_part( 'parts/layout', 'sidebar-close' ); ?>
	<?php get_template_part( 'parts/layout', 'full-close' ); ?>
<?php get_footer(); ?>