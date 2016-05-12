<footer class="site-footer">
	<nav class="site-nav" role="navigation">
		<?php 
			$args = array('theme_location' => 'footer');
		?>
		<?php wp_nav_menu( $args ); ?>
	</nav>
	<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
</footer>
</div> <!-- container closed -->
<?php wp_footer(); ?>
</body>
</html>