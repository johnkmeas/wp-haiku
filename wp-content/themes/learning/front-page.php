<?php get_header(); ?>
	<div id="crop">
	    <img src='<?php echo esc_url( get_theme_mod( 'learning_hero' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="center hero-absolute responsive-img">
	</div>          
	<div class="container title hiding">
       <br><br>
        <div class="row center">
          <div class="title-copy hiding">
	          <h1 class="header col s12">Web Design and Development</h1>
	          
	          <h4 class="header col s12">Introductary Launch special offer</h4>
	      </div>
	          <a href="services" id="download-button" class="call-btn btn-large waves-effect waves-light center z-depth-3">Learn More+</a>
        </div>
        <br><br>
	</div>

<?php

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="row front-copy ">
		<div class="front-copy-title">
			<h2 class="center container"><?php the_title(); ?></h2>
		</div>
			<!-- custom posts loop begins here -->
		<?php		
			$newsPosts = new WP_Query('cat=10&posts_per_page=3&orderby=title');

			if ($newsPosts -> have_posts() ) : 
				while ($newsPosts -> have_posts() ) : 
				$newsPosts -> the_post();  ?>
					<div class="service-widget center responsive-img col s12 m4">	
						<a class="service-icon__hover" href="services"><?php the_post_thumbnail('icon-thumbnail'); ?>
						<h4 class="center"><?php the_title(); ?></h4></a>
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
		<div class="splash ribbon center col s12 m2">
				<?php the_post_thumbnail('banner-image'); ?>
		</div>
	</article>

	<div class="row front-copy-bottom">
		<!-- custom posts loop begins here -->
		<?php		
		$newsPosts = new WP_Query('cat=26&posts_per_page=3&orderby=title');
		if ($newsPosts -> have_posts() ) :
			while ($newsPosts -> have_posts() ) : 
			$newsPosts -> the_post();  ?>
				<div class="action-title center col m12 s12">
					<h2 class="center container"><a href="services"><?php the_title(); ?></a>
					</h2>
				</div>
				<div class="action-widget center responsive-img col s12 m12">
	
					<div class="center col s10 offset-s1 m8 offset-m2">
					<?php the_content();?> 
					</div>
					<div class="action-img col s12">
						<?php the_post_thumbnail('action-thumbnail'); ?>
					</div>
				</div>
			<?php endwhile; 
				
			else: endif; 
		wp_reset_postdata(); // resets the post data back to standard loop
			?>
	</div><!-- end row -->

	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

		<?php  get_sidebar('newsletter'); ?>

<?php get_footer(); ?>