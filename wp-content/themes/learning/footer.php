
	<footer class="page-footer">
		<!-- footer-widgets -->
		<div class="row">
			<?php if(is_active_sidebar('footer1')): ?>
				<div class="widget-bottom col s12 m3">
					<?php dynamic_sidebar('footer1'); ?>
				</div>
			<?php endif; ?>

			<?php if(is_active_sidebar('footer2')): ?>
				<div class="widget-bottom col s12 m3">
					<?php dynamic_sidebar('footer2'); ?>
				</div>
			<?php endif; ?>	

			<?php if(is_active_sidebar('footer3')): ?>
				<div class="widget-bottom col s12 m3">
					<?php dynamic_sidebar('footer3'); ?>
				</div>
			<?php endif; ?>

			<?php if(is_active_sidebar('footer4')): ?>
				<div class="widget-bottom col s12 m3">
					<?php dynamic_sidebar('footer4'); ?>
				</div>
			<?php endif; ?>					
		</div>

		<nav class="footer-copyright" role="navigation">
			<?php 
				$args = array('theme_location' => 'footer');
			?>
			<?php wp_nav_menu( $args ); ?>
			<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
		</nav>

	</footer>
	

<?php wp_footer(); ?>
<script>
(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space



$(document).ready(function() {

  // place this within dom ready function
  function title() {     
    $('hr').addClass('title-fade showing');
  }  
	function titleH4() {     
		$('h4.header').addClass('title-fade showing');
	}
	function titleH1() {     
		$('h1.header').addClass('title-fade2 showing');
	}
	function titleBtn() {     
	    $('.call-btn').addClass('showing magictime puffIn');
	}
    function serve() {     
      $('#99').addClass('showing title-fade');
  }
 // use setTimeout() to execute
  setTimeout(title, 200);

 setTimeout(titleH1, 200);
 setTimeout(titleH4, 500);
 setTimeout(titleBtn, 700);
//setTimeout(serve, 700);

});

  var options = [
    {selector: '.service-widget', offset: 0, callback: function() {
      $('.service-widget').addClass('hiding');
    } },
    {selector: '.service-widget', offset: 200, callback: function() {
      $('.service-widget').addClass('title-fade3 showing');
    } },
    {selector: '.front-copy-title', offset: 0, callback: function() {
      $('.front-copy-title').addClass('hiding');
    } },
    {selector: '.front-copy-title', offset: 100, callback: function() {
      $('.front-copy-title').addClass('title-fade2 showing');
    } },
    {selector: '.front-article', offset: 0, callback: function() {
      $('.front-article').addClass('hiding');
    } },
    {selector: '.front-article', offset: 100, callback: function() {
      $('.front-article').addClass('title-fade2 showing');
    } },
   {selector: '.splash', offset: 0, callback: function() {
      $('.splash').addClass('hiding');
    } },
    {selector: '.splash', offset: 200, callback: function() {
      $('.splash').addClass('title-fade3 showing');
    } }        
  ];
  Materialize.scrollFire(options);


</script>

</body>
</html>