
<?php get_header(); ?>


<?php

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container row">
	<div class="title-column">
	<h2><?php the_title(); ?></h2>
	</div>
	<div class="text-column row">
		
		<div class="contact-info col s12 m4">
			<h5>Hours of Operation: <?php the_field('hours'); ?></h5>
			<div class="contact-links">
				<a href="mailto:<?php the_field('email'); ?>" class="contact-button btn-large waves-effect waves-light center z-depth-3">
					email
				</a>
				<a href="tel:<?php the_field('phone'); ?>" class="contact-button btn-large waves-effect waves-light center z-depth-3"> 
					604-831-5646
				</a>
			</div>
		</div>
		<?php the_content(); ?>
	</div><!-- text column --->
</div><!-- container -->

		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>


<?php get_footer(); ?>