<?php 
/*
	Template Name: Special Layout
*/
get_header(); ?>



<?php

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="post page">
		<h2><?php the_title(); ?></h2>

		<div class="info-box">
			<h4>Serving title</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In vero quia nesciunt quae earum ipsa iure praesentium sapiente suscipit, quos rem voluptatum, repellat ex assumenda, dolore sed est aliquam facilis</p>
		</div>
		<?php the_content(); ?>
	</article>

		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>


<?php get_footer(); ?>