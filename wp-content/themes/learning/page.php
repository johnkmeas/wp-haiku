
<?php get_header(); ?>


<?php

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">
<h2 class=""><?php the_title(); ?></h2>
<article class="post page">
	<?php
		if ( has_children() OR $post->post_parent > 0 ) { ?>
      <?php the_content(); ?>
	 <ul id="dropdown2" class="dropdown-content">	
		<li><a class="about-link" href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id());?></a></li>


				<?php 
				$args = array(
					'child_of' => get_top_ancestor_id(),
					'title_li' => ''

				);
				?>
				<?php wp_list_pages($args); ?>

			</ul>
	  <a class="btn dropdown-button" href="#!" data-activates="dropdown2">More+<i class="mdi-navigation-arrow-drop-down right"></i></a>
     
  
	<?php } ?>

</article><!-- container -->

		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

</div>
<?php get_footer(); ?>