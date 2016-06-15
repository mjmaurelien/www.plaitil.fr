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

		<div>

			<footer id="footer-container">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>
		<div id="footer">
			<div id="basfooter">
		    <div id="page-full-width">
		      <div class="row lien_footer">
		        <div class="small-12 large-3 columns reso">
								<p>
									<i class="fa fa-copyright" aria-hidden="true"></i>Plait-il ? | 2016
								</p>
		        </div>
		        <div class="small-12 large-3 columns reso">
		          <p>
		          	<i class="fa fa-map-marker" aria-hidden="true"></i>Plait-il ?<br><a href="https://www.google.fr/maps/search/5+rue+du+B%C3%BBcher,+13007+Marseille/@43.2806818,5.3610179,13z/data=!3m1!4b1"target="_blank"> 5 rue du Bûcher, 13007 Marseille</a>
		          </p>
		        </div>
						<div class="small-12 large-3 columns reso">
							<a href="#">Mentions légales</a>
		        </div>
						<div class="small-12 large-3 columns reso">
								<a href="#" class="animationrotate"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
			          <a href="#" class="animationrotate"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
			          <a href="#" class="animationrotate"><i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i></a>
			          <a href="#" class="animationrotate"><i class="fa fa-instagram fa-2x" ></i></a>
		        </div>
		      </div>
		    </div>
		</div>
	</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<script type="text/javascript">
	$('.petit_visu').hover(function(){
		$(this).find('.detail').css('top', '0');
	}, function(){
		$(this).find('.detail').css('top', '-100%');
	})
</script>

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
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
})
$(document).ready(function() {

  $("#owl-demo").owlCarousel({

      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
			autoplay:true,
			autoplayTimeout:6000,


      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });

});



if ( $( ".entry-summary" ).length ) {

	$('.sidebar').remove()
	$('.row .small-12').removeClass('large-8')

}
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
$('.toggleMenu').click(function(){
  $('#header #navigation').slideToggle();
})
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-576010c4b2b36d1a"></script>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
