<?php 
/*
	Template Name: Services Layout
*/
get_header(); ?>
<!-- home-columns -->
<h1>Services</h1>
	<!-- one-half -->
	<div class="row service-area">
		<!-- custom posts loop begins here -->
		<?php		
		$reviewPosts = new WP_Query('cat=10&posts_per_page=3');

		if ($reviewPosts -> have_posts() ) : 

			while ($reviewPosts -> have_posts() ) : 
			$reviewPosts -> the_post();  ?>
			<div class="amber lighten-2 row col sm12 service-container">
				<h2 class="center"><?php the_title(); ?></h2>
				<div class="responsive-img center icon col sm12 m12">
					<?php the_post_thumbnail('icon-thumbnail'); ?>
					
				</div>
				<div class="col sm12 m12" >
					<?php the_content();?>
				</div>
			</div>
			<?php endwhile; 
			
			else:

		endif; 
		wp_reset_postdata(); // resets the post data back to standard loop
		?>
	</div>

<?php get_footer(); ?>