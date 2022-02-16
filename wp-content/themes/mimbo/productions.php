<?php
/*
Template Name: productions
*/
?>
<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 		
	 <?php 
      // excludes this post from 'Related posts' in the sidebar
      $GLOBALS['current_id'] = $post->ID; 
      ?> 
       
		<div id="post-<?php the_ID(); ?>" <?php post_class('style'); ?>>
			<h2 class="posttitle"><?php the_title(); ?></h2>
	
		 <p class="postmetadata">&nbsp;</p>
		 
			<div class="entry clearfloat">
            	<ul>
  				<?php wp_list_categories('exclude=8,9&style="list"&feed_image=wp-content/themes/mimbo/images/production_thumb.jpg&title_li='); ?>
				</ul>
				<?php the_content('<p>'.__('Read the rest of this entry','Mimbo').'&raquo;</p>'); ?>

				<?php wp_link_pages(array(
				'before' => '<p><strong> '.__('Pages:','Mimbo').' </strong>', 
				'after' => '</p>', 
				'next_or_number' => 'number')); 
				?>
				</div>
	      <?php the_tags('<span id="tags"><strong>'.__('Tagged as:','Mimbo').'</strong> ', ', ', '</span>'); ?>
	      <?php edit_post_link(__('Edit this entry','Mimbo'), '<p>', '&raquo;</p>'); ?>

</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.','Mimbo'); ?></p>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
