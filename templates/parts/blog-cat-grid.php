<div id="masonry" class="row">
			<?php 
			$args = array( 
				'category_name' => $opts['snwb_blog_cat_select_1'], 
				'posts_per_page' => 1, 
				'order'=> 'ASC', 
				'post_type' => 'post', 
				'no_found_rows'       => true,
        		'ignore_sticky_posts' => true,
			);	
			$query = new WP_Query($args);
			?>
			<?php if ($query->have_posts()) :?>
				<?php while ($query->have_posts()) :  $query->the_post(); ?>
					<div class="col-xs-6 col-sm-4 masonry-item">
						<?php include('post-listed.php'); ?>
						<?php //get_template_part( 'content', get_post_format() ); ?>
					</div>
				<?php endwhile; ?>			
			<?php endif; ?>
			<?php wp_reset_postdata();?>
			<?php 
			$args = array( 
				'category_name' => $opts['snwb_blog_cat_select_2'], 
				'posts_per_page' => 1, 
				'order'=> 'ASC', 
				'post_type' => 'post', 
				'no_found_rows'       => true,
        		'ignore_sticky_posts' => true,
			);	
			$query = new WP_Query($args);
			?>
			<?php if ($query->have_posts()) :?>
				<?php while ($query->have_posts()) :  $query->the_post(); ?>
					<div class="col-xs-6 col-sm-4 masonry-item">
						<?php include('post-listed.php'); ?>
						<?php //get_template_part( 'content', get_post_format() ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata();?>
			<?php 
			$args = array( 
				'category_name' => $opts['snwb_blog_cat_select_3'], 
				'posts_per_page' => 1, 
				'order'=> 'ASC', 
				'post_type' => 'post', 
				'no_found_rows'       => true,
        		'ignore_sticky_posts' => true,
			    
			);	
			$query = new WP_Query($args);
			?>
			<?php if ($query->have_posts()) :?>
				<?php while ($query->have_posts()) :  $query->the_post(); ?>
					<div class="col-xs-6 col-sm-4 masonry-item">
						<?php include('post-listed.php'); ?>
						<?php //get_template_part( 'content', get_post_format() ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata();?>
						<?php 
			$args = array( 
				'category_name' => $opts['snwb_blog_cat_select_4'], 
				'posts_per_page' => 1, 
				'order'=> 'ASC', 
				'post_type' => 'post', 
				'no_found_rows'       => true,
        		'ignore_sticky_posts' => true,
			);	
			$query = new WP_Query($args);
			?>
			<?php if ($query->have_posts()) :?>
				<?php while ($query->have_posts()) :  $query->the_post(); ?>
					<div class="col-xs-6 col-sm-4 masonry-item">
						<?php include('post-listed.php'); ?>
						<?php //get_template_part( 'content', get_post_format() ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata();?>
						<?php 
			$args = array( 
				'category_name' => $opts['snwb_blog_cat_select_5'], 
				'posts_per_page' => 1, 
				'order'=> 'ASC', 
				'post_type' => 'post', 
				'no_found_rows'       => true,
        		'ignore_sticky_posts' => true,
			);	
			$query = new WP_Query($args);
			?>
			<?php if ($query->have_posts()) :?>
				<?php while ($query->have_posts()) :  $query->the_post(); ?>
					<div class="col-xs-6 col-sm-4 masonry-item">
						<?php include('post-listed.php'); ?>
						<?php //get_template_part( 'content', get_post_format() ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata();?>
						<?php 
			$args = array( 
				'category_name' => $opts['snwb_blog_cat_select_6'], 
				'posts_per_page' => 1, 
				'order'=> 'ASC', 
				'post_type' => 'post', 
				'no_found_rows'       => true,
        		'ignore_sticky_posts' => true,
			);	
			$query = new WP_Query($args);
			?>
			<?php if ($query->have_posts()) :?>
				<?php while ($query->have_posts()) :  $query->the_post(); ?>
					<div class="col-xs-6 col-sm-4 masonry-item">
						<?php include('post-listed.php'); ?>
						<?php //get_template_part( 'content', get_post_format() ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata();?>
		</div>