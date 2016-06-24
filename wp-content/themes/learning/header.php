<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".nav-wrapper" data-offset="100">
<?php include_once("analyticstracking.php") ?>

	<!-- site-header -->
	<header class="site-header">
		<!-- <div class="hd-search"> 
			<?php get_search_form(); ?>
		</div>-->
	<div class="navbar-fixed">
	  <nav>
	    <div class="nav-wrapper z-depth-3">
	      <a href="https://digitalstencilca.ipage.com/wordpress.haiku" class="brand-logo"><img src='<?php echo esc_url( get_theme_mod( 'learning_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="logo-header responsive-img" id="image-test"></a>
	      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	  			<?php 
					$args = array('theme_location' => 'primary');
				?>
				<?php wp_nav_menu( $args ); ?>
	      </ul>
	      <ul class="side-nav" id="mobile-demo">
				<?php 
					$args = array('theme_location' => 'primary');
				?>
				<?php wp_nav_menu( $args ); ?>
	      </ul>
	    </div>
	  </nav>
	</div>		 
	</header>
	
