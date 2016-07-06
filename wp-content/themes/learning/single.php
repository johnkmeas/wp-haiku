<?php get_header(); ?>
<div class="container">
<?php

if ( have_posts() ) : while ( have_posts() ) : the_post() ; ?>
	<article class="row post">
		<h2 class="col s12"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="col s12 post-info"><?php the_time('F jS, Y g:i a'); ?> | by
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?>
			</a>
			| Posted in 
			<?php 
				$categories = get_the_category();
				$separator = ', ';
				$output = '';

				if ($categories) {
					foreach($categories as $category){
						$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
					}
				}
				echo trim($output, $separator);
			?>
		</p>
		<div class="single-post-image col s12">
			<?php the_post_thumbnail('banner-image'); ?>
		</div>
		<div class="sing-post-content col s12">
			<?php the_content(); ?>
		</div>
	</article>

		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

</div>
<?php get_footer(); ?>