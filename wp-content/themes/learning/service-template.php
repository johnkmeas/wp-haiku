<?php 
/*
	Template Name: Services Layout
*/
get_header(); ?>
	<div class="row container service-area">
	<h1>Services</h1>
		<!-- custom posts loop begins here -->
		<?php		
		$reviewPosts = new WP_Query('cat=10&posts_per_page=3&orderby=title');

		if ($reviewPosts -> have_posts() ) : 

			while ($reviewPosts -> have_posts() ) : 
			$reviewPosts -> the_post();  ?>
			<div class="row col s12 service-container" id="<?php the_ID(); ?>">
				
				 
				<div class="title-fade3 responsive-img center icon col s12 m2">
					<?php the_post_thumbnail('icon-thumbnail'); ?>
					
				</div>
				<h2 class=" col m8 offset-m2"><?php the_title(); ?></h2>
				<div class="col s12 m7 offset-m3 l8 offset-l2" >
					<?php the_content();?>



					<a href="<?php echo strtolower(str_replace(' ', '-', get_the_title())); ?>" class="service-button waves-effect waves-light btn">
						<small>Learn more > </small>
<?php the_title( '<strong>', '</strong>' ); ?>
</a>

				</div>
			</div>
			<?php endwhile; 
			
			else:

		endif; 
		wp_reset_postdata(); // resets the post data back to standard loop
		?>
	</div>

<?php get_footer(); ?>