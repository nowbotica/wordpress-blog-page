<div class="ot-paginate">
	<?php $previous_post = get_previous_post(); ?>
	<div class="ot-paginate-previous">
		<?php if (!empty( $previous_post )): ?>
			<p>
			<span class="next"><span class="dashicons dashicons-arrow-left-alt2"></span></span>
			<a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php echo $previous_post->post_title; ?></a>
			</p>
		<?php endif; ?>
	</div>
	<?php $next_post = get_next_post(); ?>
	<div class="ot-paginate-next">
		<?php if (!empty( $next_post )): ?>
			<p>
			<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>
			<span class="next"><span class="dashicons dashicons-arrow-right-alt2"></span></span>
			</p>
		<?php endif; ?>
	</div>
</div>