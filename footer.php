<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>


	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">



		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="http://justinleesf.com">&copy; Dreamed and designed by Justin Lee </a>
	</footer><!-- #colophon -->
</div><!-- #page -->
	
<div id="particles"></div>

</div id="contcont"> <!--close contcont-->

</div id="wrapwrap"> <!--close wrapwrap-->
	

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.particleground.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>