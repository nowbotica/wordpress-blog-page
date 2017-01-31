<?php
/**
 * The override for single page on ot blog
 *
 * @package Snowbotica Wordpress Blog
 */
?>
<?php get_header(); ?>
	<?php get_template_part( 'parts/layout', 'sidebar-open' ); ?>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php include( 'parts/content-single.php' ); ?>
					<?php if ( comments_open() || '0' != get_comments_number() ):?>
						<?php //include( 'parts/comments.php' );?>
					<?php endif;?>
					<?php include( 'parts/pagination.php');?>
				<?php endwhile;?>
				</div>
			</div><!-- .row -->

	<?php get_template_part( 'parts/layout', 'sidebar-close' ); ?>
<?php get_footer(); ?>