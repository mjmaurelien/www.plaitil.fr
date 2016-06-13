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
		  <div id="assurance" >
		    <div id="page-full-width">
		      <div class="row">
		        <div class="small-12 large-3 columns assurance">
		           <img src="<?= _URL_IMAGES; ?>/_icon/livraison.png" alt=""/>
		           <p>LIVRAISON RAPIDE ET SÉCURISÉE</p>
		        </div>
		        <div class="small-12 large-3 columns assurance">
		           <img src="<?= _URL_IMAGES; ?>/_icon/qualite.png" alt=""/>
		           <p>AUTHENTICITÉ ET TRAÇABILITÉ DES PRODUITS</p>
		        </div>
		        <div class="small-12 large-3 columns assurance">
		           <img src="<?= _URL_IMAGES; ?>/_icon/garantie.png" alt=""/>
		           <p>GARANTIE MINIMUM D’UN AN</p>
		        </div>
		        <div class="small-12 large-3 columns assurance">
		           <img src="<?= _URL_IMAGES; ?>/_icon/sansfrai.png" alt=""/>
		           <p>PAIEMENT EN PLUSIEURS FOIS SANS FRAIS</p>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div id="basfooter" >
		    <div id="page-full-width">
		      <div class="row">
		        <div class="small-12 large-12 columns news">
		          <a href="#" class="large-12 small-12 hvr-reveal2">s'abonner à la newsletter</a>
		        </div>
		      </div>
		      <div class="row lien_footer">
		        <div class="small-12 large-4 columns reso">
								<a href="http://localhost/www.orologi.fr/wordpress/?post_type=product"><p>Boutique</p></a>
		           	<a href="http://localhost/www.orologi.fr/wordpress/?page_id=133"><p>Contact</p></a>
		           	<a href="http://localhost/www.orologi.fr/wordpress/?page_id=133"><p>A propos</p></a>
								<a href="http://localhost/www.orologi.fr/wordpress/?page_id=133"><p>Garanties</p></a>
		        </div>
		        <div class="small-12 large-4 columns reso">
		          <a href="http://localhost/www.orologi.fr/wordpress/index.php/?page_id=62"><p>Marques</p></a>
		          <a href="http://localhost/www.orologi.fr/wordpress/?page_id=60"><p>Bracelets</p></a>
		          <a href="http://localhost/www.orologi.fr/wordpress/?page_id=66"><p>Nouveautés</p></a>
							<p>
			           <a href="#" class="animationrotate"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			           <a href="#" class="animationrotate"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			           <a href="#" class="animationrotate"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
			           <a href="#" class="animationrotate"><i class="fa fa-instagram" ></i></a>
			        </p>
		        </div>
						<div class="small-12 large-4 columns reso">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4779.068620464316!2d7.7406640503890705!3d48.5850383485375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xed78782525eaaaa8!2sPlace+des+Montres!5e0!3m2!1sfr!2sfr!4v1465311149866" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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
	            items:3
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

</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
