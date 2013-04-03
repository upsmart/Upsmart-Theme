<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage UpSmart
 * @since Twenty Eleven 1.0
 */
?>
</div><!-- #wrapper -->
<footer style='display: block' role="contentinfo">
	Copyright <?php echo date('Y'); ?> UpSmart, LLC.
	<br />
	<a href="http://www.upsmart.com/privacy-policy/">Privacy Policy</a>
	&nbsp;&nbsp;
	<a href="http://www.upsmart.com/terms-of-service/">Terms of Service</a>
	<div id="site-generator">
		<?php do_action( 'upsmart_credits' ); ?>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>