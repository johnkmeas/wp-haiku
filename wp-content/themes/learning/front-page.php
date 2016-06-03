<?php get_header(); ?>
</div>
<div id="crop">
          <img src='<?php echo esc_url( get_theme_mod( 'learning_hero' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="center hero-absolute responsive-img">
</div>          
<div class="container title hiding">
        <br><br>
        <div class="row center">
          <div class="header col s12 center title-logo hiding"> <img src='<?php echo esc_url( get_theme_mod( 'learning_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="logo-main responsive-img" id="image-test"></div>
          <div class="title-copy hiding">
	          <h4 class="header col s12 blue-text text-lighten-5">Web Development and Design</h4>
	      </div>
	          <a href="#portfolio" id="download-button" class="call-btn btn-large waves-effect waves-light amber darken-4 z-depth-3">Learn More+</a>
	      
        </div>
        <br><br>
</div>

<?php

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="row front-copy  amber">
			<h2 class="center front-copy-title"><?php the_title(); ?></h2>
			<!-- custom posts loop begins here -->
			<?php		
			$newsPosts = new WP_Query('cat=10&posts_per_page=3&orderby=modified');

			if ($newsPosts -> have_posts() ) : 

				while ($newsPosts -> have_posts() ) : http://localhost/wordpress.haiku/services/
				$newsPosts -> the_post();  ?>
					<div class="service-widget center responsive-img col s12 m4">
						<h4 class="center"><a href="services"><?php the_title(); ?></a></h4>
						<?php the_post_thumbnail('icon-thumbnail'); ?>
						<div class="center">
						<?php the_excerpt();?>
						</div>
					</div>
				<?php endwhile; 
				
				else:

			endif; 
			wp_reset_postdata(); // resets the post data back to standard loop
			?>
		</div><!-- end row -->
	<article class="front-area row center">	
		<!-- post-thumbnail -->
			
	<div class="center col s12 m8 offset-m1 front-article">
		<p>
			<?php the_content(); ?>
		</p>

	</div>
	<div class="splash center col s12 m2">
				<?php the_post_thumbnail('banner-image'); ?>
			</div>
	</article>

		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

<div class="container ">
<?php get_footer(); ?>