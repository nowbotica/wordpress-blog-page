<?php /*
<article class="blog-post">
    <h2 class="blog-post-title""><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <a href="<?php the_permalink();?>" class="blog-post-thumblink"><?php the_post_thumbnail();?></a>
    <div class="blog-post-content">
         <?php wp_trim_words( get_the_content(), 80 );?>
    </div>
</article>
*/ ?>
<a href="<?php the_permalink();?>" class="blog-post-thumblink overlayed-title">
	<article class="blog-post-listed">
		<span class="ol-thumb"><?php the_post_thumbnail('blog-img-4');?></span>
    	<h2 class="blog-post-title"><?php the_title();?></h2>
    	<!-- <div class="blog-post-content"> -->
        <?php //wp_trim_words( get_the_content(), 80 );?>
    	<!-- </div> -->
	</article>
</a>