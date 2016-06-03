<?php get_header(); ?>
<!-- home-columns -->
<div class="blue">
	<!-- one-half -->
	<div class="amber">
		<!-- custom posts loop begins here -->
		<?php		
		$reviewPosts = new WP_Query('cat=6&posts_per_page=3');

		if ($reviewPosts -> have_posts() ) : 

			while ($reviewPosts -> have_posts() ) : 
			$reviewPosts -> the_post();  ?>
				<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				<?php the_content();?>
			
			<?php endwhile; 
			
			else:

		endif; 
		wp_reset_postdata(); // resets the post data back to standard loop
		?>
	</div>
</div>
<?php get_footer(); ?>