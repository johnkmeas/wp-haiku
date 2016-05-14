<?php get_header(); ?>
<?php

if ( have_posts() ) : ?>
<h2>Search results for : <?php the_search_query(); ?></h2>

<?php
	while ( have_posts() ) : the_post();
 	get_template_part('content',  get_post_format());

 	endwhile; 
 	else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>


<?php get_footer(); ?>