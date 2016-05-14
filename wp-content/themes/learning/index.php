<?php get_header(); ?>
<div class="site-content clearfix">
	<!-- main-column-->
	<div class="main-column">
		<?php

			if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	
			get_template_part('content', get_post_format());
			

			endwhile; 

			else:
		?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div> <!-- /main-column-->
	<?php  get_sidebar(); ?>
</div><!-- site-content -->

<?php get_footer(); ?>