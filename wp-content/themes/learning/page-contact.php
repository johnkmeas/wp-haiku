
<?php get_header(); ?>


<?php

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="column-container clearfix">
	<div class="title-column">
	<h2><?php the_title(); ?></h2>
	</div>
	<div class="text-column">
		<?php the_content(); ?>
	</div><!-- text column --->
</div><!-- container -->

		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>


<?php get_footer(); ?>