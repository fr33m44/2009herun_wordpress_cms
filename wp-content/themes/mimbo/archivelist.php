<li class="clearfloat">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php echo get_post_image (get_the_id(), '', '', '' .get_bloginfo('template_url') .'/scripts/timthumb.php?zc=1&amp;w=80&amp;h=65&amp;src='); ?></a>
			
	<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4> 
			
		<p class="postmetadata"><?php the_time('y-n-d'); ?></p>  
			</li>