<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="blog-post-facebook-share" target="_blank">Share on Facebook</a>
			<?php
				$twitter_handle = "oliviaalexandratodd";
				$post_title = str_replace("+", " ", get_the_title());
				$post_url = get_the_permalink();
				$_sp = '&url=';
			    $intent_parameter_string = 'text='.$post_title.'&url='.$post_url.'&via='.$twitter_handle; 
			?>
			<a href="https://twitter.com/intent/tweet?<?php echo $intent_parameter_string; ?>" class="blog-post-twitter-share" target='_blank'>Tweet</a>
			<?php 
				$title = 'How%20to%20make%20custom%20linkedin%20share%20button';
				$url   = get_the_permalink();
				// echo $url;
				$title = get_the_title();
				$summary = wp_trim_words( get_the_content(), 10 );
				// echo $title;
				// $source = 'http://oliviatodd.co.uk';
				// echo $source;
				// $LinkedIn_string = 'http://www.linkedin.com/shareArticle?mini=true'+'&url='+$url+'&title='+$title+'&source='+$source;
				// $LinkedIn_string = 'http://www.linkedin.com/shareArticle?mini=true'+'&url='+$url+'&title='+$title+'&source='+$source;
				$LinkedIn_string = 'http://www.linkedin.com/shareArticle?mini=true'.'&url='.$url.'&title='.$title.'&summary='.$summary;
				// '&summary='+
				// +some%20summary%20if%20you%20want
			?>
			<script type="text/javascript" src="//platform.linkedin.com/in.js">
    			api_key:   78smi01ycpn47l
    			authorize: true
			</script>
			<a href="<?php echo $LinkedIn_string; ?>" class="blog-post-linkedin-share" target='_blank'>LinkedIn Share</a>
			<?php //echo $LinkedIn_string; ?>
