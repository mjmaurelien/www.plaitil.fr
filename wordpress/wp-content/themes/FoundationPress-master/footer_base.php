<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js"></script>
<script type="text/javascript">
$('#owl-carousel').owlCarousel({
			items:1,
			loop:false,
			center:true,
			margin:10,

			URLhashListener:true,
			autoplayHoverPause:true,
			startPosition: 'URLHash'
	});
$('#owl-carousel1').owlCarousel({
	    loop:true,
	    nav:true,
			nav:false,
			autoplay:true,
			autoplayTimeout:6000,
			items:4,

	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:6
	        }
	    }
})
$('#owl-carousel2').owlCarousel({
	    loop:true,
	    nav:true,
			nav:false,
			items:1,
			autoplay:true,
			autoplayTimeout:6000,


	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:1
	        }
	    }
})



if ( $( ".entry-summary" ).length ) {

	$('.sidebar').remove()
	$('.row .small-12').removeClass('large-8')

}
</script>
</body>
</html>
