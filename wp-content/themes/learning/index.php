<?php get_header(); ?>
<div class="container">
	<!-- main-column-->
	<div class="row main-column">
		<?php

			if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	
			get_template_part('content', get_post_format());
			

			endwhile;?>
			<nav class="col s12 m4 offset-m4 pagination center">
				<?php pagination_bar(); ?>
			</nav>

		<?php
			else:
		?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>


		<?php endif; ?>
	</div> <!-- /main-column-->
	<?php  get_sidebar(); ?>
</div>
<?php get_footer(); ?>