<?php get_header(); ?>
<?php

if ( have_posts() ) : ?>
<h2>Search results for : <?php the_search_query(); ?></h2>
<div class="row">
	<div class="col md12 results">
<?php

	while ( have_posts() ) : the_post();
 	get_template_part('content',  get_post_format());

 	endwhile; 
 	else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>