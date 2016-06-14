<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="owl-carousel2" class="owl-carousel owl-theme">
  <div class="item bloc-center" >
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/fullimage2.jpg" alt="GTA V">
    <div class="in hide-for-small-only">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/logo.png" alt=""/></a>
      <h2>Titre du projet</h2>
      <a href="#" class="button small-12 large-4 columns">voir le projet</a>
    </div>
  </div>
  <div class="item bloc-center" >
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/fullimage3.jpg" alt="GTA V">
    <div class="in hide-for-small-only">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo hide-for-small-only"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/logo.png" alt=""/></a>
      <h2 class="hide-for-small-only">Titre du projet</h2>
      <a href="#" class="button small-12 large-4 columns">voir le projet</a>
    </div>
  </div>
  <div class="item bloc-center" >
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/fullimage1.jpg" alt="GTA V">
    <div class="in hide-for-small-only">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo hide-for-small-only"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/logo.png" alt=""/></a>
      <h2 class="hide-for-small-only">Vous avez un projet en tête ?</h2>
      <a href="#contact" class="button small-12 large-4 columns">contactez nous</a>
    </div>
  </div>

</div>

	<article class="row agence">
		<div class="small-12 large-6 columns text-center img responsive">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/images.jpg" alt="GTA V">
		</div>
		<div class="small-12 large-6 columns">
			<h1>Agence «Plait-il ?»</h1>
			<h2>Exploratrice en web depuis 2015</h2>
			<hr>
			<p>
			Faites confiance à une agence expérimentée, pour qui le web n’a plus de secret. Grâce à notre équipe de professionnels, nous pouvons prendre en charge l’intégralité de votre projet.
			L’agence “plait-il?” réunit un collectif de professionnels et vous accompagne sur toute la chaîne de communication, de votre identité visuelle à votre stratégie digitale. Chaque projet, chaque client est unique. Pour chacun, nous mettons en œuvre une méthodologie structurée et sur-mesure. Elle garantit un pilotage efficace et le respect de nos engagements.
			Chez “Plait-il?”, nous cultivons les paradoxes : sérieux et bonne humeur, rigueur et créativité, autonomie et esprit d’équipe sont les valeurs que nous partageons, en exerçant tous les jours nos métiers si différents. Vous vous reconnaissez ? Il est une promesse que nous pouvons vous faire : vous n’allez pas vous ennuyer !
			</p>
      <div class="row">
      <a href="#" class="button small-12 large-5 columns">Projets</a>
      <a href="#contact" class="button small-12 large-5 columns">Contact</a>
    </div>
		</div>
	</article>



 <article class="gris">
   <!-- RECOMMANDATION
   ======================== -->

   <section class="widow">
     <div class="row">
       <div class="small-12 large-12 columns">
         <h1>Projets</h1>
				 <h2>Quelques unes de nos réalisations</h2>
         <hr>
				 <p>
				 	Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.
				 </p>
       </div>
     </div>
       <div class="row slide_projet">
         <div class="small-12 large-8 columns visuel owl-carousel " id="owl-carousel">

           <?php
             $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 5, 'orderby' =>'date','order' => 'DESC' );
             $loop = new WP_Query( $args );
             while ( $loop->have_posts() ) : $loop->the_post();
             $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
             $url = $thumb['0'];
           ?>



           <div class="item" data-hash="<?php the_ID() ?>">
             <div class="large-6 small-12 columns visu_one">
               <div class="visu">
                 <img src="<?php echo $url ?>" alt=""/>
               </div>
             </div>
             <div class="large-6 small-12 columns texte">
               <h2><?php the_title(); ?></h2>
               <hr>
               <div class="">
                 <?php echo the_excerpt() ?>
               </div>
               <a href="<?php the_permalink() ?>" class="button large-12 small-12 hvr-reveal">En savoir plus</a>
               <!--<a href="?add-to-cart=<?php echo $product->id ?>" class="button large-12 small-12 hvr-reveal">Ajouter au panier</a>-->

             </div>
           </div>

         <?php endwhile; ?>
         <?php wp_reset_query(); ?>
         </div>

       <div class="small-12 large-4 columns ">
         <div class="row">

           <?php
             $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 5, 'orderby' =>'date','order' => 'DESC' );
             $loop = new WP_Query( $args );
             while ( $loop->have_posts() ) : $loop->the_post();
             $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
             $url = $thumb['0'];
           ?>

           <div class=" large-6 small-6 columns visu_tow no-gutter">
             <div class="petit_visu">
               <a href="#<?php the_ID() ?>">
                 <div class="detail">
                   <h2><?php the_title(); ?></h2>
                   <hr>
                   <a href="#<?php the_ID() ?>" class="expanded button btndetail">Voir plus</a>
                 </div>
               </a>
               <img src="<?php echo $url ?>" alt=""/>
             </div>
           </div>

         <?php endwhile; ?>
         <?php wp_reset_query(); ?>
         </div>
       </div>
     </div>
   </section>
 </article>

 <article id="contact" class="row">
   <section class="widow contact">
       <h1>Nous contacter</h1>
         <h2>Ne soyez pas timide !</h2>
           <hr>
           <p>Nous pouvons vous aider à concrétiser votre projet. Nous vous accompagnerons et développerons votre projet de façon à le rendre unique !</p>
          <?php echo do_shortcode( '[contact-form-7 id="11" title="Contact form 1"]' ); ?>
   </section>
 </article>







 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>

 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>







<?php get_footer();
