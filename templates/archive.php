<?php
/**
 * The override for archive page on ot blog
 *
 * @package Snowbotica Wordpress Blog
 */
?>
<?php get_header(); ?>
	<?php //get_template_part( 'parts/blog', 'menu'); ?>
	<?php get_template_part( 'parts/layout', 'full-open' ); ?>
	<?php //get_template_part( 'parts/layout', 'sidebar-open' ); ?>
		<?php //get_template_part('parts/blog', 'recent-slides');?>
		<?php if ( have_posts() ) : ?>
			<div id="masonry" class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<!-- <div class="col-xs-6 col-lg-4 masonry-item"> -->
					<!-- <div class="col-sm-10 col-sm-offset-1"> -->
					<div class="col-sm-6 col-md-4 masonry-item">
						<?php //get_template_part('parts/post', 'listed'); ?>
						<?php include('parts/post-listed.php'); ?>
						<?php //get_template_part( 'content', get_post_format() ); ?>
					</div>
				<?php endwhile; ?>
			</div>
			<?php nuthemes_content_nav( 'nav-below' ); ?>
		<?php else : ?>
			<h1>Nothing to see here</h1>
		<?php endif; ?>

	<?php //get_template_part( 'parts/layout', 'sidebar-close' ); ?>
	<?php get_template_part( 'parts/layout', 'full-close' ); ?>
<?php get_footer(); ?>

<!-- if (locate_template('content-' . $pageName . '.php') != '') {
	// yep, load the page template
	get_template_part('content', $pageName);
} else {
	// nope, load the content
	the_content();
} -->