<?php get_header(); ?>
<?php

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="front-pg">
		<h2><?php the_title(); ?></h2>
		<!-- post-thumbnail -->
		<div class="splash">
			<?php the_post_thumbnail('splash-image'); ?>
		</div>
		


	<div class="front-article">
		<p>
			<?php the_content(); ?>
			<a>Read More&raquo;</a>
		</p>
	</div>

	</article>




		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>


<?php get_footer(); ?>