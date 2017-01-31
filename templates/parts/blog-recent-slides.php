	<?php
$cat_id = get_query_var('cat');
$args = array(
    'posts_per_page' => 3,
    'order' => 'DESC',
    'cat' => $cat_id
);

$rp = new WP_Query( $args );?>
<?php if($rp->have_posts()) :?>
	<section class="slider-container">
		<div class="slider">
		    <?php while($rp->have_posts()) : $rp->the_post();?>
		    	<?php if ( has_post_thumbnail() ) :  // check if the post has a Post Thumbnail assigned to it. ?>
		    	<div class="recent-slide">
			    	<a href="<?php the_permalink();?>" class="recent-slide-inner">
			    		<div class="otp">
			       			 
			          			<?php the_post_thumbnail('blog-img-12'); //display the thumbnail ;?>
					      	
			    		</div>
			    		<div class="recent-slide-title-wrap">
			       			<h3 class="recent-slide-title"><?php the_title();?></h3> 
			       		</div>
			    	</a>
		      	</div>
		  		<?php endif;?>
		    <?php endwhile; ?>
		</div>
	</section>
    <!-- // always always remember to reset postdata when using a custom query, very important -->
    <?php wp_reset_postdata(); ?>
<?php endif; ?>