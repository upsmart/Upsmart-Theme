<?php
/*
Template Name: UpSmart Home
*/

get_header("featured"); ?>
<section id='featured' style='background: transparent; padding: 0;'>
	<div id='featured-login' class='featured-2col'><div id='social'>
	<input type="image" id="facebook" src="https://dl.dropboxusercontent.com/u/11993667/social/facebook-32.png" />
	<input type="image" id="twitter" src="https://dl.dropboxusercontent.com/u/11993667/social/twitter-32.png" />
	<input type="image" id="googleplus" src="https://dl.dropboxusercontent.com/u/11993667/social/googleplus-32.png" />
	<input type="image" id="rss" src="https://dl.dropboxusercontent.com/u/11993667/social/rss-32.png" />
	</div>
	<div id='tabbed-login-space'>
                <?php dynamic_sidebar( 'home-login' ); ?>
	</div>
	<div id='featured-in'> <div class='featured-in-headding'>
	<h4>As Featured by:</h4>
	</div></div>
	</div>
	<div class='featured-2col featured-1row featured-content'><div class='featured-headding'>
		<h3>UpSmart: Free services to guide entrepreneurs from concept to completion.</h3>
	</div></div>
	<div class='featured-1col featured-1row featured-bottomrow'><div style='position: relative;'>
		<?php echo do_shortcode("[metaslider id=2633]"); ?>
	</div></div>
	<br style='clear: both'/>
</section>
<div id='bottom'>
	<div class="widget-area"><div>
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div></div>
	<div class="widget-area"><div>
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div></div>
	<div class="widget-area"><div>
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
	</div></div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
	//alert(typeof($));
	var hoverTimeout = false;
	(function($) {
		$("#bottom .widget-area").hover(function() {
			nh = $("#bottom")[0].offsetTop-$("#featured").children()[0].offsetTop;
			$(this).css('margin-top',-1*nh);
			$(this).addClass('selected');
			
		},
		function() {
			$(this).css('margin-top',0);
			$(this).removeClass('selected');
		});
		
	})(jQuery);
</script>
<?php get_footer("featured"); ?>
